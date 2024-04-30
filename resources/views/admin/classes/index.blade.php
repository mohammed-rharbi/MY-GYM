@extends('layouts.admin')

@section('title', 'All Classes')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Capacity</th>
                            <th scope="col">Date</th>
                            <th scope="col">Type</th>
                            <th scope="col">Room</th>
                            <th scope="col">Coach</th>
                            <th scope="col">Start Time</th>
                            <th scope="col">End Time</th>
                            <th scope="col">Created At</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classes as $class)
                        <tr>
                            <td>{{ $class->id }}</td>
                            <td>{{ $class->title }}</td>
                            <td>{{ $class->description }}</td>
                            <td>{{ $class->Capacity }}</td>
                            <td>{{ $class->date }}</td>
                            <td>{{ $class->class_type->name}}</td>
                            <td>{{ $class->classroom->name}}</td>
                            <td>{{ $class->coach->name}}</td>
                            <td>{{ $class->startTime}}</td>
                            <td>{{ $class->endTime}}</td>
                            <td>{{ $class->created_at->format('M d, Y') }}</td>
                            <td class="text-center">
                                <form action="{{ route('class_destroy', $class->id) }}" method="POST">
                                    
                                @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"  title="Cancel Class"><i class="fas fa-trash" onclick="return confirm('are u sure you want to delete this class')"></i></button>

                                </form>
                            </td>
                        </tr>
                
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
