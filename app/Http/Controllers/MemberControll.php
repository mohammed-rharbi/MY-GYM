<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\categorie;
use App\Models\classroom;
use App\Models\Coach;
use App\Models\Gym_class;
use App\Models\member;
use App\Models\member_class;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberControll extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $articles = article::all();
        $classes = Gym_class::all();
        $rooms = classroom::all();

        return view('member.dashbourd' , compact('articles','classes','rooms'));

    }


    public function classes(){

        $classes = Gym_class::where('hide', false)->get();
    
        $existingClasses = Gym_class::where('endTime', '>', now()->format('H:i:s'))->get();
    
        if ($existingClasses->count() > 0) {
            foreach ($existingClasses as $class) {
                $class->delete(); // Delete each ongoing gym class
            }
        }
    
        return view('member.classes', compact('classes'));
    }
    

    public function rooms(){

        $rooms = classroom::all();


        return view('member.rooms' , compact('rooms'));
    }


    
    public function articles(){

        $articles = article::latest()->get();
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

        // Perform your search logic here
        $results = Article::where('title', 'like', '%' . $query . '%')
            ->orWhere('content', 'like', '%' . $query . '%')
            ->get();

        // Prepare data for JSON response
        $searchResults = [];
        foreach ($results as $article) {
            $searchResults[] = [
                'url' => route('article.show', $article->id),
                'img' => '/storage/' . $article->img,
                'title' => $article->title,
                'created_at' => $article->created_at,
                'created_at_formatted' => $article->created_at->format('M d, Y'),
                'content' => substr($article->content, 0, 350),
                'author' => $article->user->name,
                'category' => $article->category->name
            ];
        }

        return response()->json($searchResults);
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }


    public function profil(){

        $user = Auth::user();
        $member = $user->member;
        $gymclass = member_class::where('member_id' , $user->id)->get();
        
        return view('profiles.user_profile', compact('user', 'member','gymclass'));

    }
}
