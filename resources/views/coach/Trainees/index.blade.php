@extends('layouts.coach')

@section('title', 'Manage Classes')

@section('content')
<div class="container-fluid">
 
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Trainer Name</th>
                            <th scope="col">Class</th>
                            <th scope="col">Start Time</th>
                            <th scope="col">End Time</th>
                            <th scope="col">Created At</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tranier as $tra)
                        <tr class="text-white">
                            <td>{{ $tra->member->name }}</td>
                            <td>{{ $tra->class->name }}</td>
                            <td>{{ $tra->class->startTime}}</td>
                            <td>{{ $tra->class->endTime}}</td>
                            <td>{{ $tra->created_at->format('M d, Y') }}</td>
                            <td class="text-center">
                                <form  method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
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
