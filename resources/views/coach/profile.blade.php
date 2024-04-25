@extends('layouts.coach')


@section('title','Coach Profile')
    
@section('content')

<style>



.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}


</style>
    
<div class="container rounded bg-white   mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center mb-5">
                <img class="rounded-circle mt-5" width="150px" height="150px" src="/storage/{{$coach->image}}">
                <span class="font-weight-bold">{{ $user->name }}</span><span class="text-black-50">{{ $user->email }}</span>

            </div>
        </div>
        <div class="col-md-9 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>

                <form action="{{ route('storeInfo') }}" method="POST"  novalidate enctype="multipart/form-data">

                    @method('PUT')
                    @csrf

                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" name="name"  value="{{ $user->name }}"></div>
                </div>
                <div class="row mt-3">
                    
                    <div class="col-md-12"><label class="labels">Specialization</label><input type="text" class="form-control" placeholder="specialization" name="specialization" value="{{ $coach->specialization }}"></div> 
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Description</label>
                        <textarea class="form-control" placeholder="Description" id="description" name="description">{{ $coach->description }}</textarea>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Photo</label>
                        <input type="file" name="image" accept="image/jpeg,image/png,image/jpg,image/gif">
                    </div>
                </div>

                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>

            </form>

            </div>
        </div>
    </div>
</div>
</div>
</div>



@endsection
