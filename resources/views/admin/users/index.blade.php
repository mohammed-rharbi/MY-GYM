@extends('layouts.admin')

@section('title', 'Manage Users')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Manage Users Card -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage Users</h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->image }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->Role }}</td>
                                    <td>
                                        @if ($user->ban)
                                        <form  method="POST" action="{{ route('Unban', $user->id) }}">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" class="btn btn-success px-3 btn-sm">Unban</button>
                                        </form>
                                        @else
                                        <form  method="POST" action="{{ route('Ban', $user->id) }}">
                                            @csrf
                                            @method('POST')
                                            <button type="submit" id="ban" class="btn btn-danger px-4 btn-sm" onclick="return confirm('Are you sure you want to Ban this user?')">Ban</button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
