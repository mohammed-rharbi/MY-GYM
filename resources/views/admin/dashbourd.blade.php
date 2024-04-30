@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid">

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


<h2 class="text-center mt-4">our members</h2>
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
          <tr>
            <th>Name</th>
            <th>goal</th>
            <th>tall</th>
            <th>wight</th>
            <th>Status</th>
            <th>Role</th>
          </tr>
        </thead>

        @foreach ($users as $user)              
        <tbody>
          <tr>
            <td>
              <div class="d-flex align-items-center">
                <img
                src="/storage/{{ $user->image}}"
                    alt=""
                    style="width: 55px; height: 55px"
                    class="rounded-circle"
                    />
                <div class="ms-3 ml-4">
                  <p class="fw-bold mb-1">{{ $user->user->name }}</p>
                  <p class="text-muted mb-0">{{ $user->user->email }}</p>
                </div>
              </div>
            </td>
            <td>
              <p class="fw-normal mb-1">{{ $user->goal }}</p>
            </td>

            <td>
                <p class="fw-normal mb-1">{{ $user->tall}} cm</p>
            </td>

            <td>
                <p class="fw-normal mb-1">{{ $user->wight }} Kg</p>
            </td>

            @if ($user->user->ban)
            <td>
                <span class="badge badge-danger rounded-pill d-inline py-2 px-4">banned</span>
            </td>     
            @else
            <td>
              <span class="badge badge-success rounded-pill d-inline py-2 px-4">Active</span>
            </td>
            @endif

            <td>{{ $user->user->Role }}</td>
          </tr>
        </tbody>
        @endforeach
      </table>




      <h2 class="text-center mt-4">our coaches</h2>
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
          <tr>
            <th>Name</th>
            <th>description</th>
            <th>specialization</th>
            <th>Status</th>
            <th>Role</th>
          </tr>
        </thead>

        @foreach ($coaches as $coach)              
        <tbody>
          <tr>
            <td>
              <div class="d-flex align-items-center">
                <img
                src="/storage/images/{{ $coach->image}}"
                    alt=""
                    style="width: 55px; height: 55px"
                    class="rounded-circle"
                    />
                <div class="ms-3 ml-4">
                  <p class="fw-bold mb-1">{{ $coach->user->name }}</p>
                  <p class="text-muted mb-0">{{ $coach->user->email }}</p>
                </div>
              </div>
            </td>
            <td>
              <p class="fw-normal mb-1">{{ $coach->description }}</p>
            </td>

            <td>
                <p class="fw-normal mb-1">{{ $coach->specialization}}</p>
            </td>

            @if ($coach->user->ban)
            <td>
                <span class="badge badge-danger rounded-pill d-inline py-2 px-4">banned</span>
            </td>     
            @else
            <td>
              <span class="badge badge-success rounded-pill d-inline py-2 px-4">Active</span>
            </td>
            @endif

            <td>{{ $coach->user->Role }}</td>
          </tr>
        </tbody>
        @endforeach
      </table>

</div>
@endsection
