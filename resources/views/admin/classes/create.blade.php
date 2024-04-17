@extends('layouts.admin')

@section('title', 'Create Class Type')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Manage Class Types Card -->
        <div class="col-xl-6">
            <div class="card text-white bg-dark mb-4">
                <div class="card-body">
                    <h5 class="card-title">Create New Class Type</h5>
                    <form action="{{ route('class_type.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="class_name">Name</label>
                            <input type="text" class="form-control" id="class_name" name="name" placeholder="Enter class name" required>
                        </div>
                        <div class="form-group">
                            <label for="class_description">Description</label>
                            <textarea class="form-control" id="class_description" name="description" rows="5" placeholder="Enter class description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Class Type</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
