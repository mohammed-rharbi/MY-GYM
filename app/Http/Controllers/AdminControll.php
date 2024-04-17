<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Coach;
use App\Models\article;
use App\Models\Gym_class;
use Illuminate\View\View;
use App\Models\member_class;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminControll extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $totalusers = User::where('Role','member')->count();
        $totlacoaches = User::where('Role' , 'coach')->count();
        $totalclasses = Gym_class::count();
        $totalarticales = article::count();
        $totalresrvations = member_class::count();
        return view('admin.dashbourd' , compact('totalusers','totlacoaches','totalclasses','totalarticales','totalresrvations'));
    }



    public function allusers(){

        $users = User::whereIn('Role' , ['coach','member'])->get();


        return view('admin.users.index',compact('users'));
    }

    public function allclasses(){

        $classes = Gym_class::all();

        return view('admin.classes.index', compact('classes'));
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


    public function myarticle(){


        $userId = auth()->id();
        $articles = Article::where('users_id', $userId)->get();

        return view('admin.article.show' , compact('articles'));
    }


    public function banned(): View
    {
        
        return view('component.banned'); // Return the banned message view
    }


    public function ban($id)
    {
        $user = User::findOrFail($id);
        $user->ban = true;
        $user->save();
        
        return redirect()->back()->with('success', 'User banned successfully!');
        
    }

    public function Unban($id)
    {
        $user = User::findOrFail($id);
        $user->ban = false;
        $user->save();
        
        return redirect()->back()->with('success', 'User Unbanned successfully!');
        
    }

    public function adminprofile(){

        $user = Auth::user();

        return view('admin.profile' , compact('user'));
    }
}
