<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Coach;
use App\Models\article;
use App\Models\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoachControll extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = article::where('users_id' , Auth::id())->get();
        $categories = categorie::all();

        return view('coach.dashbourd', compact('articles','categories'));
    }

    public function createArticle(){

        $categories = categorie::all();
        return view('coach.article.create', compact('categories'));

    }

    public function myArticle()
    {
        
        $articles = article::where('users_id' , Auth::id())->get();
        $categories = categorie::all();

        return view('coach.article.index', compact('articles' , 'categories'));

    }

    public function store( Request $request)
    {
       
        $validatedata = $request->validate([

            'image' => 'required|max:2948',
            'description' => 'required|string',
            'specialization' => 'required|string',
        ]);

        $id = Auth::id();

        $user = User::findOrFail($id); 
        $coach = new Coach;

        if(!$user){

            return redirect()->back()->with('error' , 'user not found');
        }

        $coach->description = $validatedata['description'];
        $coach->specialization = $validatedata['specialization'];
        $coach->users_id = Auth::id();
        $coach->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName); 
        }

        $user->image = 'images/' . $imageName;
        $user->save();

        return redirect()->route('coach.index')->with('success','welcome coach');

    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function coachprofile(Request $request , string $id)
    {

        
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'nullable',
            'image' => 'nullable',
            'description' => 'nullable|string',
            'specialization' => 'nullable|string',
        ]);
    
        $user = User::findOrFail($id);
        $coach = Coach::findOrFail($id);

        $coach->users_id = Auth::id();
        $coach->description = $validatedData['description'];
        $coach->specialization = $validatedData['specialization'];
        $coach->save();
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName); 
            $user->image = 'images/' . $imageName;
            $user->save();
        }
    

        return redirect()->back()->with('success' , 'Coach profile updated successfully');
    }
    

    public function showprofile(){

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $coach = Coach::where('users_id', Auth::id())->first();

        return view('coach.profile', compact('user','coach'));
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
}
