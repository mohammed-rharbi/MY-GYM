<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authManger extends Controller
{
    


    public function home(){

        $coach = Coach::all();
        $user = User::where('Role','coach')->get();

        return view('home',compact('coach','user'));

    }


    public function login(){

        return view('auth.login');

    }


    public function regester(){

        return view('auth.regester');
        
    }


    public function GetLogin(Request $request){

        $request->validate([

            'email' => 'required',
            'password' => 'required',
        ]);

        
        $cordentials = $request->only('email','password');
        if(Auth::attempt($cordentials)){

            if(Auth::user()->ban){

                Auth::logout();
                return redirect()->route('banned');

              }

            switch (auth()->user()->Role) {
                case 'admin':
                    return redirect()->route('admin.index');
                    break;
    
                case 'coach':
                    return redirect()->route('coach.index');
                    break;
    
                case 'member':
                    return redirect()->route('member.index');
                    break;
                
                default:
                    return redirect()->route('login');
                    break;
            }
        }

        return redirect()->back()->with('error', 'info not match');

    }

    public function GetRegester(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'Role' => 'required|in:member,coach',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
    

        
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images', 'public'); 
        } else {
            $image = null;
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'Role' => $request->Role,
        ]);

        if(!$user){
            return redirect(route('regester'))->with('error' , 'Registration failed. Please try again.');
        }
    
        Auth::login($user);
    
        switch ($request->Role) {
            case 'coach':
                Coach::create([
                    'users_id' => $user->id,
                    'description' => $request->description,
                    'specialization' => $request->specialization,
                    'image' => $image,
                ]);
                return redirect(route('coach.index'))->with('success', 'Registration successfull.');
                break;
    
            case 'member':
                Member::create([
                    'users_id' => $user->id,
                    'goal' => $request->goal,
                    'wight' => $request->wight,
                    'tall' => $request->tall,
                    'image' => $image, 
                ]);
                return redirect(route('member.index'))->with('success', 'Registration successfull.');
                break;
    
            default:
                return redirect(route('login'))->with('success', 'Registration successful. Please check your email for verification.');
                break;
        }
    }
    
    
    
    

    public function logout(){

        Session::flush();
        Auth::logout(); 

        return redirect(route('login'));
    }


    public function index()
    {
        //
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
}
