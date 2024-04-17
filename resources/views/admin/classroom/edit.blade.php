@extends('layouts.admin')

@section('title', 'Edit Category')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4 text-light">Admin Dashboard</h1>
    <div class="row">
        <!-- Manage Categories Card -->
        <div class="col-xl-6">
            <div class="card text-white bg-dark mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-4">Manage Training Rooms</h5>
                    <!-- Category Form -->
                    <form action="{{ route('Traning_Room.update' , $room->id ) }}" method="POST" novalidate enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" name="image" id="" accept="image/jpeg,image/png,image/jpg,image/gif">
                        </div>

                        <div class="form-group">
                            <label for="category_name">Room Name:</label>
                            <input type="text" class="form-control" id="category_name" name="name" value="{{ $room->name }}" placeholder="Enter room name" required>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Update Training Room</button>
                        </div>
                    </form>
                    <!-- End of Category Form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
