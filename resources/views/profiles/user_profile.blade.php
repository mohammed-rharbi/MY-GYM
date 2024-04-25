@extends('layouts.app')

@section('title', 'Profile')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Profile</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            @if($member->isNotEmpty())
                                @foreach($member as $m)
                                    <img src="/storage/{{ $m->image }}" alt="Profile Picture" class="img-fluid rounded-circle mb-4" style="max-width: 200px;">
                                @endforeach
                            @else
                                <p>No member record found.</p>
                            @endif
                        </div>
                        <div class="col-md-8">
                            @if($member->isNotEmpty())
                                @foreach($member as $m)
                                    <p><strong>Name:</strong> {{ $m->user->name }}</p>
                                    <p><strong>Email:</strong> {{ $m->user->email }}</p>
                                    <p><strong>Goal:</strong> {{ $m->goal }}</p>
                                    <p><strong>Weight:</strong> {{ $m->wight }} kg</p>
                                    <p><strong>Height:</strong> {{ $m->tall }} cm</p>
                                @endforeach
                            @else
                                <p>No member record found.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}



<div class="container padding-bottom-3x mb-2">
    <div class="row">
        <div class="col-lg-4">
            <aside class="user-info-wrapper">
                <div class="user-cover" style="background-image: url(https://bootdey.com/img/Content/bg1.jpg);">
                </div>
        @if ($member->isNotEmpty())
        @foreach ($member as $m)                       
                <div class="user-info">
                    <div class="user-avatar">
                    <a class="edit-avatar" href="#"></a><img src="/storage/{{ $m->image }}" alt="User"></div>

                    <div class="user-data">
                        <h4>{{ $m->user->name }}</h4><span>Joined {{ $m->created_at->format('Y,M,D') }}</span>
                    </div>
                </div>
            </aside>
            <nav class="list-group">
                <a class="list-group-item with-badge" href="#"><i class=" fa fa-th"></i>My Classes<span class="badge badge-primary badge-pill">6</span></a>
                <a class="list-group-item" href="#"><i class="fa fa-user"></i>Profile</a>
                <a class="list-group-item" href="#"><i class="fa fa-map"></i>Addresses</a>
                <a class="list-group-item with-badge active" href="#"><i class="fa fa-heart"></i>Wishlist<span class="badge badge-primary badge-pill">3</span></a>
                <a class="list-group-item with-badge" href="#"><i class="fa fa-tag"></i>My Tickets<span class="badge badge-primary badge-pill">4</span></a>
            </nav>
        </div>
        @endforeach
        @endif

        <div class="col-lg-8">
            <div class="padding-top-2x mt-2 hidden-lg-up"></div>
            <!-- Wishlist Table-->
            <div class="table-responsive wishlist-table margin-bottom-none">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th class="text-center"><a class="btn btn-sm btn-outline-danger" href="#">Clear Wishlist</a></th>
                        </tr>
                    </thead>
                    <tbody>


                        @if ($gymclass->isNotEmpty())
                        @foreach ($gymclass as $class)                            
                        <tr>
                            <td>
                                <div class="product-item">
                                    <a class="product-thumb" href="#"><img src="/storage/{{ $class->class->classroom->image}}" alt="room image"></a>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="#">{{ $class->class->title }}</a></h4>
                                        <h5 class="prod:uct-title"><a href="#"></a></h5>
                                        <div class="text-lg text-medium text-muted"></div>
                                        <div>Booked At:
                                            <div class="d-inline text-success">{{ $class->created_at->format('Y,M,D') }}</div>
                                        </div>
                                        <div>Gym Room:
                                            <div class="d-inline text-success">{{ $class->class->classroom->name}}</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="" data-original-title="Remove item"><i class="icon-cross"></i></a></td>
                        </tr>                            
                        @endforeach 

                        @else
                        <h4 class="text-dark">ther is no classes yeet </h4>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





<style>

.user-info-wrapper {
    position: relative;
    width: 100%;
    margin-bottom: -1px;
    padding-top: 90px;
    padding-bottom: 30px;
    border: 1px solid #e1e7ec;
    border-top-left-radius: 7px;
    border-top-right-radius: 7px;
    overflow: hidden
}

.user-info-wrapper .user-cover {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 120px;
    background-position: center;
    background-color: #f5f5f5;
    background-repeat: no-repeat;
    background-size: cover
}

.user-info-wrapper .user-cover .tooltip .tooltip-inner {
    width: 230px;
    max-width: 100%;
    padding: 10px 15px
}

.user-info-wrapper .info-label {
    display: block;
    position: absolute;
    top: 18px;
    right: 18px;
    height: 26px;
    padding: 0 12px;
    border-radius: 13px;
    background-color: #fff;
    color: #606975;
    font-size: 12px;
    line-height: 26px;
    box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.18);
    cursor: pointer
}

.user-info-wrapper .info-label>i {
    display: inline-block;
    margin-right: 3px;
    font-size: 1.2em;
    vertical-align: middle
}

.user-info-wrapper .user-info {
    display: table;
    position: relative;
    width: 100%;
    padding: 0 18px;
    z-index: 5
}

.user-info-wrapper .user-info .user-avatar,
.user-info-wrapper .user-info .user-data {
    display: table-cell;
    vertical-align: top
}

.user-info-wrapper .user-info .user-avatar {
    position: relative;
    width: 115px
}

.user-info-wrapper .user-info .user-avatar>img {
    display: block;
    width: 100%;
    border: 5px solid #fff;
    border-radius: 50%
}

.user-info-wrapper .user-info .user-avatar .edit-avatar {
    display: block;
    position: absolute;
    top: -2px;
    right: 2px;
    width: 36px;
    height: 36px;
    transition: opacity .3s;
    border-radius: 50%;
    background-color: #fff;
    color: #606975;
    line-height: 34px;
    box-shadow: 0 1px 5px 0 rgba(0, 0, 0, 0.2);
    cursor: pointer;
    opacity: 0;
    text-align: center;
    text-decoration: none
}

.user-info-wrapper .user-info .user-avatar .edit-avatar::before {
    font-family: feather;
    font-size: 17px;
    content: '\e058'
}

.user-info-wrapper .user-info .user-avatar:hover .edit-avatar {
    opacity: 1
}

.user-info-wrapper .user-info .user-data {
    padding-top: 48px;
    padding-left: 12px
}

.user-info-wrapper .user-info .user-data h4 {
    margin-bottom: 2px
}

.user-info-wrapper .user-info .user-data span {
    display: block;
    color: #9da9b9;
    font-size: 13px
}

.user-info-wrapper+.list-group .list-group-item:first-child {
    border-radius: 0
}

.user-info-wrapper+.list-group .list-group-item:first-child {
    border-radius: 0;
}
.list-group-item:first-child {
    border-top-left-radius: 7px;
    border-top-right-radius: 7px;
}
.list-group-item:first-child {
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
}
a.list-group-item {
    padding-top: .87rem;
    padding-bottom: .87rem;
}
a.list-group-item, .list-group-item-action {
    transition: all .25s;
    color: #606975;
    font-weight: 500;
}
.with-badge {
    position: relative;
    padding-right: 3.3rem;
}
.list-group-item {
    border-color: #e1e7ec;
    background-color: #fff;
    text-decoration: none;
}
.list-group-item {
    position: relative;
    display: block;
    padding: .75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,0.125);
}





</style>

@endsection