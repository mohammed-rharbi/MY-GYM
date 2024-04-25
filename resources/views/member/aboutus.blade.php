@extends('layouts.app')

@section('title', 'About Us')

@section('content')



<div class="container mt-5">
    <!-- Feature Section -->
    <div class="section">
        <h2 class="text-center mb-5">Our Services</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="feature text-center">
                    <i class="fas fa-dumbbell feature-icon"></i>
                    <h3 class="feature-title">Personal Training</h3>
                    <p class="feature-description">Get personalized training sessions tailored to your fitness goals.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature text-center">
                    <i class="fas fa-users feature-icon"></i>
                    <h3 class="feature-title">Group Classes</h3>
                    <p class="feature-description">Join group classes for a fun and motivating workout experience.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature text-center">
                    <i class="fas fa-carrot feature-icon"></i>
                    <h3 class="feature-title">Nutrition Counseling</h3>
                    <p class="feature-description">Receive expert advice on nutrition to complement your fitness routine.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <section class="about py-5 mt-5 text-center" style="background-color: #ffffff;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="display-4 mb-4">Who We Are</h2>
                    <p class="lead fs-5">We are a team with a passion for innovation and excellence. Our mission is to empower businesses by providing cutting-edge solutions that drive growth and success. With our deep industry knowledge and commitment to quality, we deliver results that exceed expectations.</p>
                    <button type="button" class="btn btn-primary btn-lg rounded-pill">Get in Touch</button>
                </div>
                <div class="col-lg-6">
                    <div class="row gx-3 gy-3">
                        <div class="col-6">
                            <div class="about-image mt-5">
                                <img class="img-fluid rounded" loading="lazy" src="/storage/images/back1.jpg" alt="Team Member 1">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-image">
                                <img class="img-fluid rounded" loading="lazy" src="/storage/images/back1.jpg" alt="Team Member 2">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-image mt-5">
                                <img class="img-fluid rounded" loading="lazy" src="/storage/images/back1.jpg" alt="Team Member 3">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="about-image">
                                <img class="img-fluid rounded" loading="lazy" src="/storage/images/back1.jpg" alt="Team Member 4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
