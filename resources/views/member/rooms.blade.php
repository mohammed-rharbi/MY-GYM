@extends('layouts.app')

@section('title', 'Gym Rooms')

@section('content')
    <div class="container mb-5">
        <div class="row justify-content-center">
         

<div class="col-12 col-md-10 col-lg-8 text-center mt-5 mb-5">
<h3 class="fs-5 mb-2 text-secondary text-uppercase">About</h3>
<h2 class="display-5 mb-4">Our gym rooms are designed to cater to a variety of fitness needs and preferences. Whether you're into cardio, strength training, or group classes</h2>
</div>
            
                <div class="row justify-content-center">
                        @foreach($rooms as $room)
                            <div class="col-12 col-lg-6 mt-4">
                                <div class="room bg-light p-3 m-0">
                                    <div class="row gy-3 gy-md-0 align-items-md-center">
                                        <div class="col-md-5">
                                            <div class="room-img-container">
                                                <img src="/storage/{{ $room->image }}" class="img-fluid rounded-start" alt="{{ $room->name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body p-0">
                                                <h2 class="card-title h4 mb-3">{{ $room->name }}</h2>
                                                <p class="card-text lead">{{ $room->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
            </div>
        </div>  
    </div>
            @endsection