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
                            <th scope="col">User Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Start Time</th>
                            <th scope="col">End Time</th>
                            <th scope="col">Booked At</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookedUsers as $user)
                        <tr class="text-white">
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->memberClass->startTime}}</td>
                            <td>{{ $user->memberClass->endTime}}</td>
                            <td>{{ $user->memberClass->created_at->format('M d, Y') }}</td>
                            <td class="text-center">
                                <form method="POST">
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
