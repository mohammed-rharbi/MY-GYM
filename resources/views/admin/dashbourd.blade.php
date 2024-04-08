@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid">
    <h1 class="h2 mb-5 mt-4 text-light text-center">Admin Dashboard</h1>

    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card bg-primary text-white shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="far fa-calendar-alt fa-3x"></i>
                        </div>
                        <div class="col ml-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Reservations</div>
                            <div class="h5 mb-0 font-weight-bold">{{ $totalresrvations }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 mb-4">
            <div class="card bg-success text-white shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-book fa-3x"></i>
                        </div>
                        <div class="col ml-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total  Articles</div>
                            <div class="h5 mb-0 font-weight-bold">{{ $totalarticales }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card bg-danger text-white shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-dumbbell fa-3x"></i>
                        </div>
                        <div class="col ml-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Number of Classes</div>
                            <div class="h5 mb-0 font-weight-bold">{{ $totalclasses }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>

    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card bg-info text-white shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-user-check fa-3x"></i>
                        </div>
                        <div class="col ml-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Active Users</div>
                            <div class="h5 mb-0 font-weight-bold">{{ $totalusers }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4">
            <div class="card bg-warning text-white shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-users fa-3x"></i>
                        </div>
                        <div class="col ml-2">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total Coaches</div>
                            <div class="h5 mb-0 font-weight-bold">{{ $totlacoaches }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
