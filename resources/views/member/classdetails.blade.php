@extends('layouts.app')

@section('title', 'Class Details')

@section('content')
<div class="container py-5"> 
    <div class="card mb-4"> 
        <div class="row g-0"> 
            <div class="col-md-8">
                <div class="card-body">
                    <h1 class="card-title display-6">{{ $class->title }}</h1> 
                    <p class="card-text lead">{{ $class->description }}</p> 
                    <div class=" mb-3 py-2"> 
                        <span class="badge bg-secondary p-2">Class Type:  {{ $class->class_type->name }}</span>
                        <span class="badge bg-primary p-2">Coach: {{ $class->coach->name }}</span>
                    </div> 
                    <hr class="my-3">
                    <dl class="row">
                        <dt class="col-sm-4">Trainers:</dt>
                        <dd class="col-sm-8">{{ $class->Capacity }}</dd>
                        <dt class="col-sm-4">Date:</dt>
                        <dd class="col-sm-8">{{ $class->date }}</dd>
                        <dt class="col-sm-4">Times:</dt>
                        <dd class="col-sm-8">{{ $class->startTime }} - {{ $class->endTime }}</dd>
                    </dl>
                    <form action="{{ route('book_class', $class->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-book mt-5">Book</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <img src="/storage/{{ $class->classroom->image }}" class="img-fluid rounded-start mt-3" alt="Classroom Image">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $class->classroom->name }}</h5>
                        <p class="card-text">{{ $class->classroom->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<style>

/* Overall card polish */
.card {
  margin-bottom: 2rem;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Image Styling */
.img-fluid {
  max-width: 100%;
  height: auto;
}

/* Title Emphasis */
.display-6 { 
  font-weight: bold;
  margin-bottom: 1rem; 
}

/* Softer Badges */
.badge {
  border-radius: 0.3rem;
  font-size: 90%;
}

/* Overall Enhancements */
.card-body {
  padding: 2.5rem; /* More spacious content */
}

.lead {
  font-size: 1.1rem; /* Slightly larger lead paragraph */
}

/* Button Refinement */
.btn-primary {
  background-color: #007bff; /* Classic Bootstrap blue */
  border-color: #0062cc;  /* Slightly darker border */
  padding: 0.6rem 1.2rem; /* Adjust padding if needed */
  transition: background-color 0.2s ease; /* Smooth transition */
}

.btn-primary:hover {
    background-color: #0056b3; /* Darker on hover */
}

/* Optional: Softer shadow for modern look */
.card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05); 
}


</style>
