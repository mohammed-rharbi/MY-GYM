@extends('layouts.admin')

@section('title', 'Manage classes types')

@section('content')
<div class="container-fluid">
   
    <div class="row mb-4">
        <div class="col-lg-3">
            <a href="{{ route('class_type.create') }}">
                <button class="btn btn-success py-3 btn">Create Class type</button>
            </a>      
        </div>
    </div>

    @foreach($classes as $class)
    <div class="text-dark  mt-2" style="font-size: 1.1rem;">
        <div class="list-group-item   d-flex justify-content-between align-items-center">
            <h3 class="">{{ $class->name }}</h3>
            <div class="btn-group " role="group">
                <a href="{{ route('class_type.edit', $class->id) }}" class="btn px-3 mr-3 btn-outline-primary btn">Edit</a>
                <form action="{{ route('class_type.destroy', $class->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger px-3 btn" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    

</div>
@endsection
