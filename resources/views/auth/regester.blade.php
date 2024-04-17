@extends('layouts.auth')
@section('title', 'Register')
@section('content')

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <!-- Pills content -->
        <div class="col-md-6">
            <div class="card shadow bg-dark bg-opacity-50">
            
                <div class="card-body p-5 text-light">
                    <h2 class="card-title text-center mb-4">Register</h2>
                    <form action="{{ route('regester.GetRegester') }}" method="POST">
                        @csrf
                        <!-- Username input -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Name</label>
                            <input type="text" id="username" name="name" class="form-control py-3" placeholder="Enter your name" required>
                        </div>

                        <!-- Email input -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control py-3" placeholder="Enter your email" required>
                        </div>

                        <!-- Password input -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control py-3" placeholder="Enter your password" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password_confirmation" class="form-control py-3" placeholder="Enter your password" required>
                        </div>

                        <div class="d-flex gap-3 mt-4 ">
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="Role" id="member" value="member">
                              <label class="form-check-label" for="member">
                                  Member
                              </label>
                          </div>
                          <div class="form-check">
                              <input class="form-check-input" type="radio" name="Role" id="coach" value="coach">
                              <label class="form-check-label" for="coach">
                                  Coach
                              </label>
                          </div>
                      </div>

                      <div class="text-center mt-5">
                        <p class="text-light">You Alerady Have An Account? <a href={{ route('login') }} class="text-primary">Login</a></p>
                      </div>
                       
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block py-2">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Pills content -->
    </div>
</div>

@endsection
