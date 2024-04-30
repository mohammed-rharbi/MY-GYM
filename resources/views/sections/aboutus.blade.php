@extends('layouts.app')

@section('title', 'About Us')

@section('content')



	

<div class="container py-4" >
  <!-- About Us Section -->
  <section class="about py-5 mt-5 text-center" style="background-color: #ffffff;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="display-4 mb-4">Who We Are</h2>
                <p class="lead fs-5">At MY GYM, we're your dedicated fitness partners. With a focus on community, quality, and support, we're here to help you achieve your fitness goals. Our team of experienced trainers and top-notch facilities are ready to guide you on your journey to a healthier, happier you</p>
                <a  href="{{ route('contact') }}" ><button type="button" class="btn btn-primary btn-lg rounded-pill">Get in Touch</button></a>
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
