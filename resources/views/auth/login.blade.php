@extends('layouts.auth')
@section('title', 'Login')
@section('content')
  


<div class="container">
    <div class="row justify-content-center mt-3 vh-100">
        <!-- Pills content -->
        <div class="col-md-6 ">
          <div class="mt-5 ">
            <div class="card shadow bg-dark bg-opacity-50 " style="">
                <div class="card-body  p-5 text-light">
                    <h2 class="card-title text-center mb-4">Login</h2>
                    <form method="POST" action="{{ route('login.GetLogin') }}">
                        @csrf
                        <!-- Email input -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email or Username</label>
                            <input type="email" id="email" name="email" class="form-control py-3" placeholder="Enter your email or username" required>
                        </div>

                        <!-- Password input -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control py-3" placeholder="Enter your password" required>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block py-2">Login</button>

                        <!-- Register buttons -->
                        <div class="text-center  mt-3">
                            <p class="text-light">Not a member? <a href={{ route('register') }} class="text-primary">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Pills content -->
    </div>
</div>
    
@endsection
