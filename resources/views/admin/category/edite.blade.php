
@extends('layouts.admin')

@section('title', 'Edit Category')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Manage Categories Card -->
        <div class="col-xl-6">
            <div class="card text-white mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-4">Manage Categories</h5>
                    
                    <!-- Category Form -->
                    <form action="{{ route('category.update' , $category->id ) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="category_name">Category Name</label>
                            <input type="text" class="form-control" id="category_name" name="name" value="{{ $category->name }}"  placeholder="Enter category name" required>
                        </div>
                        <button type="submit" class="btn btn-light">Update Category</button>
                    </form>
                    <!-- End of Category Form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



