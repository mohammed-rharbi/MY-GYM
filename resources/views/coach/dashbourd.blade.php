@extends('layouts.coach')

@section('title', 'Dashboard')

@section('content')



<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="mb-4">Welcome to Your Dashboard</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Your Classes</h4>
                </div>
                <div class="card-body">
                    <p>You have {{ $classCount }} classes scheduled.</p>
                    <a href="" class="btn btn-primary">View Classes</a>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Manage Your Profile</h4>
                </div>
                <div class="card-body">
                    <p>Update your profile information, add a profile picture, and manage your account settings.</p>
                    <a href="" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
