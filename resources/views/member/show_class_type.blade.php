@extends('layouts.app')

@section('title', 'Classes')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-9">
            <h2 class="text-center mb-5">Our Gym Classes</h2>


@if ($classes->isEmpty())

<h3>no class found</h3>
@endif


            <div class="row gy-4">
                @foreach($classes as $class)
                <div class="col-md-12">
                    <div class="card border-0 shadow-lg gym-class-card">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="/storage/{{ $class->classroom->image }}" class="card-img-top h-100 rounded-start" alt="{{ $class->title }}">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body d-flex flex-column h-100">
                                    <h5 class="card-title">{{ $class->title }}</h5>
                                    <p class="card-text">{{ $class->class_type->name }}</p>
                                    <ul class="list-unstyled mb-4">
                                        <li><i class="far fa-clock"></i> <strong>Time:</strong> {{ $class->startTime }} - {{ $class->endTime }}</li>
                                        <li><i class="far fa-calendar-alt"></i> <strong>Date:</strong> {{ $class->date }}</li>
                                        <li><i class="fas fa-map-marker-alt"></i> <strong>Location:</strong> {{ $class->classroom->name }}</li>
                                    </ul>
                                    <p class="card-text flex-grow-1">{{ $class->description }}</p>
                                    <a href="{{ route('Class_details', $class->id) }}" class="btn btn-primary align-self-end mt-auto">See More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

<style>
    .gym-class-card {
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .gym-class-card:hover {
        transform: translateY(-5px);
    }

    .card-img-top {
        object-fit: cover;
    }

    .btn-primary {
        background-color: #4CAF50;
        border: none;
    }

    .btn-primary:hover {
        background-color: #45a049;
    }

    .class-type-link:hover .bg-primary {
        background-color: #ff6b6b !important;
    }

    .class-type-link:hover .bg-primary::after {
        border-left-color: #ff6b6b !important;
    }
</style>
