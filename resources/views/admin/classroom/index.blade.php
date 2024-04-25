@extends('layouts.admin')

@section('title', 'Manage Training Rooms')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4 text-light">Admin Dashboard</h1>
   
    <div class="row mb-4">
        <div class="col-lg-3">
            <a href="{{ route('Traning_Room.create') }}">
                <button class="btn btn-success py-2 px-4">Create Room</button>
            </a>      
        </div>
    </div>

    @foreach($TraningRoom as $room)
    <div class="card mb-3">
        <div class="card-body d-flex align-items-center">
            <img src="/storage/{{ $room->image }}" height="100" alt="" class="mr-3 rounded">
            <div>
                <h3 class="card-title mb-1" style="font-style:oblique">{{ $room->name }}</h3>
                <p class="card-content mt-3" style="font-style:oblique">{{ $room->description }}</p>
            </div>
            <div class="ml-auto">
                <div class="btn-group" role="group">
                    <a href="{{ route('Traning_Room.edit', $room->id) }}" class="btn px-3 mr-3 btn-outline-primary btn">Edit</a>
                    <form action="{{ route('Traning_Room.destroy', $room->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger px-3 btn" onclick="return confirm('Are you sure you want to delete this room?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
