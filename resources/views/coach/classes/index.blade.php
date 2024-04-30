@extends('layouts.coach')

@section('title', 'Manage Classes')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-lg-3">
            <a href="{{ route('class.create') }}">
                <button class="btn btn-success btn-lg btn-block">Create Class</button>
            </a>              
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table align-middle mb-0 bg-dark text-white">
                    <thead class="bg-primary">
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
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classes as $class)
                        <tr>
                            <td>{{ $class->id}}</td>
                            <td>{{ $class->title}}</td>
                            <td>{{ $class->description}}</td>
                            <td>{{ $class->Capacity}}</td>
                            <td>{{ $class->date}}</td>
                            <td>{{ $class->class_type->name}}</td>
                            <td>{{ $class->classroom->name}}</td>
                            <td>{{ $class->coach->name}}</td>
                            <td>{{ $class->startTime}}</td>
                            <td>{{ $class->endTime}}</td>
                            <td>{{ $class->created_at->format('M d, Y') }}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" onclick="location.href='{{ route('class.edit', $class->id) }}'">Edit</button>

                                <form action="{{ route('class.destroy', $class->id) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
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
