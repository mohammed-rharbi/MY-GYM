@extends('layouts.auth')

@section('title','dashboard')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-6">
            <div class="card bg-dark text-light">
                <div class="card-header">
                    <h3 class="card-title">Coach Registration</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('coach.store' , $user->id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Profile Picture</label>
                            <input class="form-control" name="image" type="file" id="formFileMultiple" accept="image/jpeg,image/png,image/jpg,image/gif" required/>
                        </div>

                        <div class="mb-3">
                            <label for="specialization" class="form-label">Specialization</label>
                            <input type="text" name="specialization" class="form-control" id="specialization" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" rows="4" id="description" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
