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
                    <form action="{{ route('regester.GetRegester') }}" method="POST"  novalidate enctype="multipart/form-data">
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
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control py-3" placeholder="Confirm your password" required>
                        </div>

                        <!-- Role selection -->
                        <div class="d-flex gap-3 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Role" id="member" value="member" >
                                <label class="form-check-label" for="member">Member</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Role" id="coach" value="coach">
                                <label class="form-check-label" for="coach">Coach</label>
                            </div>
                        </div>

                        <!-- Additional inputs for coaches -->
                        <div id="coachFields" style="display: none;">
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" id="image" name="image" class="form-control py-3" accept="">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" name="description" class="form-control py-3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="specialization" class="form-label">Specialization</label>
                                <input type="text" id="specialization" name="specialization" class="form-control py-3">
                            </div>
                        </div>


                         <!-- Additional inputs for memver -->
                         <div id="memberFields" style="display: none;">
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" id="image" name="image" class="form-control py-3" accept="image/jpeg,image/png,image/jpg,image/gif">
                            </div>
                            <div class="mb-3">
                                <label for="goal" class="form-label">Fitness Goal:</label>
                                <select id="goal" name="goal" class="form-control py-3">
                                    <option value="">Select your fitness goal</option>
                                    <option value="lose_weight">Lose Weight</option>
                                    <option value="build_muscle">Build Muscle</option>
                                    <option value="improve_fitness">Improve Fitness</option>
                                    <option value="increase_endurance">Increase Endurance</option>
                                    <option value="tone_body">Tone Body</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="wight" class="form-label">wight</label>
                                <input type="number" id="wight" name="wight" class="form-control py-3" min="40">
                            </div>
                            <div class="mb-3">
                                <label for="tall" class="form-label">tall</label>
                                <input type="number" id="tall" name="tall" class="form-control py-3" min="80">
                            </div>
                           
                        </div>

                        <!-- Submit button -->
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
        // Listen for changes in the role selection
        $('input[type="radio"][name="Role"]').change(function() {
            // If the selected role is coach, show the coach fields
            if ($(this).val() === 'coach') {
                $('#coachFields').show(); // Show the coach fields
                $('#memberFields').hide(); // Hide the member fields
            } else if ($(this).val() === 'member') { // If the selected role is member, show the member fields
                $('#memberFields').show(); // Show the member fields
                $('#coachFields').hide(); // Hide the coach fields
            } else { // If neither coach nor member is selected, hide both sets of fields
                $('#coachFields').hide();
                $('#memberFields').hide();
            }
        });
    });
</script>
@endsection
