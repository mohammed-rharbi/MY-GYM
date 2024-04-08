<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\User;
use Illuminate\Http\Request;

class CoachControll extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('coach.dashbourd');
    }


   
    /**
     * Show the form for creating a new resource.
     */
    
     public function create(){

        return view('coach.createCoach');
    }
   
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request ,$userId )
    {
         // Validate the incoming request data
         $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string',
            'specialization' => 'required|string',
        ]);
    
        // Get the existing user by ID
        $user = User::findOrFail($userId);
    
        // Store the photo in the filesystem (assuming it's stored in public directory)
        $photoPath = $request->file('photo')->store('images', 'public');
    
        // Update the user's photo URL
        $user->image = asset('storage/' . $photoPath);
        $user->save();
    
        // Create a new coach record (assuming you have a Coach model)
        $coach = new Coach();
        $coach->user_id = $user->id;
        $coach->description = $request->input('description');
        $coach->specialization = $request->input('specialization');
        $coach->save();
    
        return redirect()->route('coach.index');
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
