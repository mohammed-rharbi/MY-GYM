<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Custom Styles -->
    <link href="{{ asset('style.css') }}" rel="stylesheet">


    <style>

.carousel-item img {
    max-height: 700px; 
}

.welcome-heading {
    font-family: 'Bungee Inline', cursive; 
    font-size: 4rem; 
    font-weight: bold; 
    text-shadow: 10px 8px 90px rgba(0, 0, 0, 0.3);
}

.welcome-text {
    font-family: 'Bungee Inline', cursive;
    font-size: 1.8rem; 
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); 
}

.navbar {
    position:absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000; 
}
    </style>

</head>
<body>


    @include('component.navigation')


   
<!-- Carousel -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/storage/{{'images/back1.jpg' }}" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="welcome-heading">Welcome to My Gym</h2>
                <p class="welcome-text">Your journey to fitness starts here. Join our gym today and transform yourself!</p>
                <a href="#" class="btn btn-primary">Explore Our Services</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="/storage/{{'images/back3.jpg' }}" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="welcome-heading">Welcome to My Gym</h2>
                <p class="welcome-text">Your journey to fitness starts here. Join our gym today and transform yourself!</p>
                <a href="#" class="btn btn-primary">Explore Our Services</a>
            </div>
        </div>

        <div class="carousel-item">
            <img src="/storage/{{'images/back2.jpg' }}" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="welcome-heading">Welcome to My Gym</h2>
                <p class="welcome-text">Your journey to fitness starts here. Join our gym today and transform yourself!</p>
                <a href="#" class="btn btn-primary">Explore Our Services</a>
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


    <div class="container">
        <!-- Services Section -->
        <div class="section mt-5">
            <h2>Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-dumbbell feature-icon"></i>
                        <h3 class="feature-title">Personal Training</h3>
                        <p class="feature-description">Get personalized training sessions tailored to your fitness goals.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-users feature-icon"></i>
                        <h3 class="feature-title">Group Classes</h3>
                        <p class="feature-description">Join group classes for a fun and motivating workout experience.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-carrot feature-icon"></i>
                        <h3 class="feature-title">Nutrition Counseling</h3>
                        <p class="feature-description">Receive expert advice on nutrition to complement your fitness routine.</p>
                    </div>
                </div>
            </div>
        </div>

       

        <!-- About Us Section -->
<div class="section about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="section-title">About Us</h2>
                <p class="about-description">My Gym is more than just a fitness center; it's a community dedicated to helping individuals achieve their health and wellness goals. Our team of experienced trainers and instructors is committed to providing personalized support and guidance to every member.</p>
                <p class="about-description">With state-of-the-art facilities, innovative workout programs, and a welcoming atmosphere, we strive to create a positive and empowering environment where our members can thrive and reach their full potential.</p>
            </div>
            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{ asset('images/pexels-thisisengineering-3912952.jpg') }}" class="card-img-top" alt="Article 1">
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- Articles Section -->
<div class="section" id="art">
    <h2>Latest Articles</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="">
                <img src="{{ asset('images/pexels-thisisengineering-3912952.jpg') }}" class="card-img-top" alt="Article 1">
                <div class="card-body">
                    <h5 class="card-title">10 Tips for Improving Your Running Technique</h5>
                    <p class="card-text">Discover 10 effective tips to enhance your running form and performance.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="">
                <img src="{{ asset('images/pexels-thisisengineering-3912952.jpg') }}" class="card-img-top" alt="Article 1">
                <div class="card-body">
                    <h5 class="card-title">The Benefits of High-Intensity Interval Training (HIIT)</h5>
                    <p class="card-text">Learn about the numerous benefits of incorporating HIIT workouts into your fitness routine.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="">
                <img src="{{ asset('images/pexels-thisisengineering-3912952.jpg') }}" class="card-img-top" alt="Article 1">
                <div class="card-body">
                    <h5 class="card-title">Nutrition Tips for Athletes</h5>
                    <p class="card-text">Explore essential nutrition guidelines to optimize performance and recovery for athletes.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- Coaches Section -->
<div class="section">
    <h2>Our Coaches</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="">
                <img src="{{ asset('images\pexels-andrea-piacquadio-3836883.jpg') }}" class="card-img-top" alt="Coach 1">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text">Certified Personal Trainer</p>
                    <p class="card-text">Specializes in strength training and weight loss.</p>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check-circle text-success mr-2"></i>NASM Certified</li>
                        <li><i class="fas fa-check-circle text-success mr-2"></i>CPR/AED Certified</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>


        <!-- Location Section -->
        <div class="section">
            <h2>Location</h2>
            <div class="row">
                <div class="col-md-12">
                    <!-- Add a map here using Google Maps API or any other map service -->
                    <div class="map" id="map"></div>
                </div>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="section">
            <h2>Contact Us</h2>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- @include('layouts.fotter') --}}

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

