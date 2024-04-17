<?php

namespace App\Http\Controllers;

use App\Models\Coach;
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

        return view('welcome',compact('coach','user'));

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
        ]);
        

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['Role'] = $request->Role;
        $user = User::create($data);

        if(!$user){
            return redirect(route('regester'))->with('error' , 'registration failed try again');
        }

        // $user->sendEmailVerificationNotification();

        // Redirect based on user role
        switch ($request->Role) {
            case 'coach':
                return redirect(route('coachform'))->with('success', 'Registration successful. Fill The Form');
                break;

            case 'member':
                return view('member.form');
                break;

            default:
                return redirect(route('login'))->with('success', 'Registration successful. Please check your email for verification.');
                break;
        }
    }


    public function coachform(){

        $user = User::findOrFail(Auth::id());

        return view('coach.createCoach',compact('user'));
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
