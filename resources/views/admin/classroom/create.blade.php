
@extends('layouts.admin')

@section('title', 'Create Room')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Manage Categories Card -->
        <div class="col-xl-6">
            <div class="card text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-4">Manage Traning Rooms</h5>
                    <!-- Category Form -->
                    <form action="{{ route('Traning_Room.store') }}" method="POST"  novalidate enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="category_name">Room Photo</label>
                            <input type="file" class="form-control" id="category_name" name="image"  required>
                        </div>

                        <div class="form-group">
                            <label for="category_name">Room Name</label>
                            <input type="text" class="form-control" id="category_name" name="name" placeholder="Enter category name" required>
                        </div>

                        <div class="form-group">
                            <label for="class_description">Description</label>
                            <textarea class="form-control" id="class_description" name="description" rows="5" placeholder="Enter class description"></textarea>
                        </div>
                        <button type="submit" class="btn btn-light">Create Traning Room</button>
                    </form>
                    <!-- End of Category Form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



