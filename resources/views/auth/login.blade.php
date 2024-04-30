@extends('layouts.auth')
@section('title', 'Login')
@section('content')

<style>
    .login-form {
        max-width: 400px;
        margin: 0 auto;
    }

    .login-form .card {
        border-radius: 15px;
        border: 2px solid #0069d9; /* Add border with color */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow effect */
    }

    .login-form input.form-control {
        border-radius: 10px;
        font-size: 14px;
        transition: all 0.3s ease;
        border-color: #ced4da; /* Add border color */
    }

    .login-form input.form-control:focus {
        border-color: #0069d9; /* Change border color on focus */
        box-shadow: 0 0 5px rgba(0, 105, 217, 0.5); /* Add shadow effect on focus */
    }

    .login-form .btn-primary {
        border-radius: 10px;
        font-size: 16px;
        transition: all 0.3s ease;
        background-color: #0069d9; /* Change button background color */
        border-color: #0069d9; /* Change button border color */
    }

    .login-form .btn-primary:hover {
        background-color: #0056b3; /* Change button background color on hover */
        border-color: #0056b3; /* Change button border color on hover */
    }
</style>

<div class="container">
    <div class="row justify-content-center mt-3 vh-100">
        <div class="col-md-6 login-form">
            <div class="mt-5">
                <div class="card shadow bg-dark bg-opacity-50">
                    <div class="card-body p-5 text-light">
                        <h2 class="card-title text-center mb-4">Login</h2>
                        <form method="POST" action="{{ route('login.GetLogin') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email or Username</label>
                                <input type="email" id="email" name="email" class="form-control py-2" placeholder="Enter your email or username" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control py-2" placeholder="Enter your password" required>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block py-2">Login</button>

                            <div class="text-center mt-3">
                                <p class="text-light">Not a member? <a href={{ route('register') }} class="text-primary">Register</a></p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
