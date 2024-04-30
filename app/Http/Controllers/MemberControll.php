<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Coach;
use App\Models\member;
use App\Models\article;
use App\Models\categorie;
use App\Models\class_type;
use App\Models\classroom;
use App\Models\Gym_class;
use App\Models\member_class;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class MemberControll extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $articles = article::latest()->take(3)->get();
        $classes = Gym_class::all();
        $rooms = classroom::all();

        return view('member.dashbourd' , compact('articles','classes','rooms'));

    }


    public function classes(){

        $classes = Gym_class::where('hide', false)->get();
        $classTypes = class_type::all();
    
// $localDate = Carbon::now()->format('Y-m-d');

//             $existingClasses = Gym_class::
//             orWhere('date', $localDate)
//             ->orWhere('endTime', '<=', now()->format('H:i:s'))
//             ->get();
    
//         if ($existingClasses->count() > 0) {
//             foreach ($existingClasses as $class) {
//                 $class->delete(); // Delete each ongoing gym class
//             }
//         }

        return view('member.classes', compact('classes','classTypes'));
    }
    

    public function rooms(){

        $rooms = classroom::all();


        return view('member.rooms' , compact('rooms'));
    }


    
    public function articles(){

        $articles = article::latest()->simplePaginate(8);
        $categories = categorie::all();

    
        return view('member.articles' , compact('articles','categories'));
    }


    public function Class_details(string $id){



        $class = Gym_class::findOrFail($id);

        return view('member.classdetails', compact('class'));
    }


    public function book(string $id){




        if(!Auth::user()->Role == 'member'){

            return redirect()->back()->with('error','Only members are allowed to book classes');
        }

        $class = Gym_class::findOrFail($id);
        $user = Auth::user();

        $existingBooking = member_class::where('member_id', $user->id)->where('class_id' , $class->id)->exists();
        if($existingBooking){

            return redirect()->back()->with('error','you already Booked this class');
        }

        if($class->Capacity <= 0){

            $class->hide = true;
            return redirect()->back()->with('error' , 'Sorry This Class Is Full');
        }
        

        $Bookedclass = new member_class;
        $Bookedclass->member_id = Auth::user()->id;
        $Bookedclass->class_id = $class->id ;
        $Bookedclass->save();

        $class->decrement('Capacity');
        

        


        return redirect()->back()->with('success' , 'Class Was Booked Successfully');

    }



    public function Author_Profile($id){


        $user = Coach::findOrFail($id);

        return view('member.AuthorProfile', compact('user'));

    }


    public function search(Request $request)
    {
        $query = $request->get('query');
        $categories = categorie::all();

        $results = Article::where('title', 'like', '%' . $query . '%')
            ->orWhere('content', 'like', '%' . $query . '%')
            ->simplePaginate(6);


        return view('member.search_result', compact('results','categories'));
    }
    



    public function show_class_type(string $id){

        $classes = Gym_class::where('class_types_id' , $id)->get();

        return view('member.show_class_type', compact('classes'));
    }



    public function profil(){

        $user = Auth::user();
        $member = $user->member;
        $gymclass = member_class::where('member_id' , Auth::id())->get();
        
        return view('profiles.user_profile', compact('user', 'member','gymclass'));

    }


    // public function send_contact(request $request){

    //     $request->validate([

    //         'fullname' => 'required',
    //         'email' => 'required|email',
    //         'phone' => 'nullable',
    //         'subject' => 'required',
    //         'message' => 'required',
    //     ]);

    //     $data = [
    //         'fullname' => $request->fullname,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'subject' => $request->subject,
    //         'message' => $request->message,
    //     ];

    //     Mail::to('rharbi383@gmail.com')->send(new ContactMail($data));
    // }


    public function cancel_class(string $id){


        $class = member_class::findOrFail($id);
        $class->delete();

        return redirect()->back()->with('success' , 'class was canceld successfully');
    }
}
