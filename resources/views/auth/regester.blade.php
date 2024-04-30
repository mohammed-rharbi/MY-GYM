@extends('layouts.auth')
@section('title', 'Register')
@section('content')

<style>
    .btn-primary {
        border-radius: 8px;
        font-size: 14px;
        transition: all 0.3s ease;
        padding: 10px 20px;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .card {
        border-radius: 15px;
        border: 2px solid #0069d9; /* Add border with color */

    }

    .form-control {
        border-radius: 10px;
        font-size: 14px;
        transition: all 0.3s ease;
        padding: 12px 15px;
    }

    .login-form {
        max-width: 600px;
        margin: 0 auto;
    }

    .login-form input.form-control {
        border-radius: 10px;
        font-size: 14px;
        transition: all 0.3s ease;
    }
</style>

<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-6 login-form">
            <div class="card shadow bg-dark bg-opacity-50">
                <div class="card-body p-4 text-light">
                    <h2 class="card-title text-center mb-4">Register</h2>
                    <form action="{{ route('regester.GetRegester') }}" method="POST" novalidate enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Name</label>
                            <input type="text" id="username" name="name" class="form-control" placeholder="Enter your name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm your password" required>
                        </div>

                        <div class="d-flex gap-3 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Role" id="member" value="member">
                                <label class="form-check-label" for="member">Member</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Role" id="coach" value="coach">
                                <label class="form-check-label" for="coach">Coach</label>
                            </div>
                        </div>

                        <div id="coachFields" style="display: none;">
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" id="image" name="image" class="form-control" accept="">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" name="description" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="specialization" class="form-label">Specialization</label>
                                <input type="text" id="specialization" name="specialization" class="form-control">
                            </div>
                        </div>

                        <div id="memberFields" style="display: none;">
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" id="image" name="image" class="form-control" accept="image/jpeg,image/png,image/jpg,image/gif">
                            </div>
                            <div class="mb-3">
                                <label for="goal" class="form-label">Fitness Goal:</label>
                                <select id="goal" name="goal" class="form-control">
                                    <option value="">Select your fitness goal</option>
                                    <option value="lose_weight">Lose Weight</option>
                                    <option value="build_muscle">Build Muscle</option>
                                    <option value="improve_fitness">Improve Fitness</option>
                                    <option value="increase_endurance">Increase Endurance</option>
                                    <option value="tone_body">Tone Body</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="weight" class="form-label">Weight</label>
                                <input type="number" id="weight" name="weight" class="form-control" min="40">
                            </div>
                            <div class="mb-3">
                                <label for="height" class="form-label">Height</label>
                                <input type="number" id="height" name="height" class="form-control" min="80">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block py-2">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')
<script>
    $(document).ready(function() {
        $('input[type="radio"][name="Role"]').change(function() {
            if ($(this).val() === 'coach') {
                $('#coachFields').show();
                $('#memberFields').hide();
            } else if ($(this).val() === 'member') {
                $('#memberFields').show();
                $('#coachFields').hide();
            } else {
                $('#coachFields').hide();
                $('#memberFields').hide();
            }
        });
    });
</script>
@endsection
