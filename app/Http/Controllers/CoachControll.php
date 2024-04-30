<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Coach;
use App\Models\article;
use App\Models\categorie;
use App\Models\classroom;
use App\Models\Gym_class;
use App\Models\member_class;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoachControll extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $articlesTotal = article::where('users_id' , Auth::id())->count();

        $coachClass = Gym_class::where('users_id', Auth::id())->first();

        if ($coachClass) {
            $totalReservations = Member_class::where('class_id', $coachClass->id)->count();
        } else {
            $totalReservations = 0;
        }

        $classCount = Gym_class::where('users_id',Auth::id())->count();

        return view('coach.dashbourd', compact('articlesTotal','classCount','totalReservations'));
    }


    public function createArticle(){

        $categories = categorie::all();
        return view('coach.article.create', compact('categories'));

    }

    public function myArticle()
    {
        
        $coach = Auth::user()->id;
        $articles = article::where('users_id' , $coach)->get();
        $categories = categorie::all();

        return view('coach.article.index', compact('articles' , 'categories'));

    }

    public function Profile(Request $request)
{
    $validatedData = $request->validate([
        'description' => 'required|string',
        'specialization' => 'required|string',
        'name' => 'required',
    ]);

    $user = $request->user();

    if (!$user) {
        return redirect()->back()->with('error', 'User not authenticated');
    }

    $coach = Coach::where('users_id', $user->id)->first();

    if (!$coach) {
        return redirect()->back()->with('error', 'Coach profile not found');
    }

    if ($request->hasFile('image')) {
        $image = $request->file('image')->store('imges','public');
     
        $coach->image = $image;
    }

    if ($request->filled('description')) {
        $coach->description = $validatedData['description'];
    }

    if ($request->filled('specialization')) {
        $coach->specialization = $validatedData['specialization'];
    }

    if ($request->filled('name')) {
        $coach->user->name = $validatedData['name'];
    }

    $coach->save();


    return redirect()->back()->with('success', 'Coach profile updated successfully');
}

    
    public function showprofile(){

        $userId = Auth::id();
        $user = User::findOrFail($userId);
        $coach = Coach::where('users_id', Auth::id())->first();

        return view('coach.profile', compact('user','coach'));
    }
    

    /**
     * Display the specified resource.
     * 
     */

    public function show(string $id)
    {
        
        $user = User::findOrFail($id);


        return view('profiles.coachProfile', compact('user'));

    }



    public function ClassTraniers()
    {


   
    // Get the coach's class
    $coachClass = Gym_class::where('users_id', Auth::id())->first();

    if ($coachClass) {
        // Get all member_class instances with the same class as the coach
        $bookedMemberships = Member_class::where('class_id', $coachClass->id)->get();
        
        // Extract user IDs from the member_class instances
        $userIds = $bookedMemberships->pluck('user_id')->toArray();
        
        // Get all users who have booked the coach's class
        $bookedUsers = User::whereIn('id', $userIds)->get();
    } else {
        // Handle the case where the coach does not have a class
        $bookedUsers = collect();
    }
    
        return view('coach.Trainees.index', compact('bookedUsers'));
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
