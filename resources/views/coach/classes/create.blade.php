@extends('layouts.coach')

@section('title', 'Create Class')

@section('content')
<div class="container-fluid">   
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header text-white" style="background-color: rgb(86, 19, 149)">Create Class</div>
                <div class="card-body">
                    <form action="{{ route('class.store') }}" method="POST" novalidate enctype="multipart/form-data">                  
                        @method('POST')
                        @csrf

                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" name="title" id="title" class="form-control" required maxlength="255">
                            <small class="text-muted">Maximum 255 characters</small>
                        </div>

                        <div class="form-group">
                            <label for="class_types_id">Class Type:</label>
                            <select name="class_types_id" id="class_types_id" class="form-control" required>
                                <option value="">Select a class type</option>
                                @foreach ($class_type as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="class_types_id">Class Room:</label>
                            <select name="class_room_id" id="class_types_id" class="form-control" required>
                                <option value="">Select a class room</option>
                                @foreach ($classroom as $room)
                                    <option value="{{ $room->id }}">{{ $room->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="start_time">Start Time:</label>
                                <input type="time" name="startTime" id="start_time" class="form-control" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="end_time">End Time:</label>
                                <input type="time" name="endTime" id="end_time" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-success">Create Class</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
