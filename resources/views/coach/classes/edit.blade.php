@extends('layouts.coach')

@section('title', 'Edit Class')

@section('content')
<div class="container-fluid">   
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header text-white" style="background-color: rgb(86, 19, 149)">Create Class</div>
                <div class="card-body">
                    <form action="{{ route('class.update', $class->id) }}" method="POST" novalidate enctype="multipart/form-data">                  
                        @method('put')
                        @csrf

                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" name="title" value="{{ $class->title }}" id="title" class="form-control" required maxlength="255">
                            <small class="text-muted">Maximum 255 characters</small>
                        </div>

                        <div class="form-group">
                            <label for="category">Class Type:</label>
                            <select name="class_types_id" id="category" class="form-control" required>
                                <option value="">Select a class type</option>
                                @foreach ($class_type as $type)
                                    <option value="{{ $type->id }}" {{ $type->id == $class->class_types_id ? 'selected' : '' }}>{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="class_types_id">Class Room:</label>
                            <select name="class_room_id" id="class_types_id" class="form-control" required>
                                <option value="">Select a class room</option>
                                @foreach ($classroom as $room)
                                    <option value="{{ $room->id }}" {{ $room->id == $class->class_room_id ? 'selected' : '' }}>{{ $room->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description"  class="form-control" rows="5" required>{{ $class->description }}</textarea>
                        </div>


                        <div class="form-group">
                            <label for="Capacity">Capacity:</label>
                            <input type="number" name="Capacity" value="{{ $class->Capacity }}" id="Capacity" min="3" max="25" class="form-control" rows="5" required></input>
                        </div>

                        <div class="form-group">
                            <label for="start_time">Start Time:</label>
                            <input type="time" name="startTime" id="start_time" value="{{ $class->startTime }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="end_time">End Time:</label>
                            <input type="time" name="endTime" id="end_time" value="{{ $class->endTime }}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" name="date" id="date" value="{{ $class->date }}" class="form-control" required>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-success">Update Class</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
