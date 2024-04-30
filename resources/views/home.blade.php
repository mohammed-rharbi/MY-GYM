@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="background-image">
    <div class="header">
        <h1 id="dynamicText">Challenge Your Limits</h1>
        <p>Welcome to our fitness hub, where your journey <br> to a healthier you begins</p>
    </div>
    <a href="{{ route('register') }}" class="signup-btn">
        <span class="sign">
            <img src="/storage/images/dump.png" width="20px" height="10" alt="" class="cosmo">
            <span class="front">Sign Up</span>
            <span class="back"></span>
            <span class="do">Let's Do It</span>
        </span>
    </a>
</div>

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
                <i class="fas fa-newspaper feature-icon"></i>
                <h3 class="feature-title">Article Service</h3>
                <p class="feature-description">Access informative articles and guides to enhance your fitness journey.</p>
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
                    <p class="lead fs-5">At MY GYM, we're your dedicated fitness partners. With a focus on community, quality, and support, we're here to help you achieve your fitness goals. Our team of experienced trainers and top-notch facilities are ready to guide you on your journey to a healthier, happier you</p>
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

    <!-- Coaches Section -->
    <div class="section mt-5">
        <h2 class="text-center mb-5">Meet Our Coaches</h2>
        <div class="row">
            <!-- Coach 1 -->
            <div class="col-md-4">
                <div class="coach text-center">
                    <img src="/storage/images/profile.jpg" class="img-fluid rounded-circle mb-3" alt="Coach 1">
                    <h3 class="coach-name">John Doe</h3>
                    <p class="coach-description">Certified Personal Trainer</p>
                </div>
            </div>
            <!-- Coach 2 -->
            <div class="col-md-4">
                <div class="coach text-center">
                    <img src="/storage/images/profile.jpg" class="img-fluid rounded-circle mb-3" alt="Coach 2">
                    <h3 class="coach-name">Jane Smith</h3>
                    <p class="coach-description">Group Fitness Instructor</p>
                </div>
            </div>
            <!-- Coach 3 -->
            <div class="col-md-4">
                <div class="coach text-center">
                    <img src="/storage/images/profile.jpg" class="img-fluid rounded-circle mb-3" alt="Coach 3">
                    <h3 class="coach-name">Mike Johnson</h3>
                    <p class="coach-description">Nutrition Specialist</p>
                </div>
            </div>
        </div>
    </div>

  <!-- Testimonials Section -->
  <section class="testimonials py-5 mt-5" style="background-color: #f8f9fa;">
    <div class="container">
        <h2 class="text-center mb-5">See What Our Clients Say About Us</h2>
        <div id="carouselTestimonials" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimonial text-center">
                        <img src="/storage/images/back1.jpg"  class="prof img-fluid rounded-circle mb-3" alt="User Image">
                        <p class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur."</p>
                        <p class="testimonial-author">- John Doe</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial text-center">
                        <img src="/storage/images/back1.jpg"  class="prof img-fluid rounded-circle mb-3" alt="User Image">
                        <p class="testimonial-text">"Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros."</p>
                        <p class="testimonial-author">- Jane Smith</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial text-center">
                        <img src="/storage/images/back1.jpg"  class="prof img-fluid rounded-circle mb-3" alt="User Image">
                        <p class="testimonial-text">"Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum."</p>
                        <p class="testimonial-author">- Mike Johnson</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselTestimonials" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselTestimonials" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
</div>

@endsection




<script>

var texts = [
    "Train Harder Now",
    "Reach New Heights",
    "Never Give Up"
];var index = 0;

function updateText() {
    document.getElementById("dynamicText").textContent = texts[index]; 
    index = (index + 1) % texts.length; 
}

setInterval(updateText, 3000); 


</script>
