@extends('layouts.app')

@section('title', 'Profile')

@section('content')


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container mt-5 mb-5">
    <div class="row">
        @if ($member->isNotEmpty())
        @foreach ($member as $m)    
        <div class="col-lg-3 col-md-4">
            <div class="text-center card-box">
                <div class="member-card">
                    <div class="thumb-xl member-thumb m-b-10 center-block">
                        <img src="/storage/{{ $m->image }}" class="img-circle img-thumbnail" alt="profile-image">
                    </div>

                    <div class="">
                        <h4 class="m-b-5">{{ $m->user->name }}</h4>
                        <p class="text-muted">{{ $m->user->email }}</p>
                    </div>
                                    
                    <div class="text-left m-t-40">
                        <p class="text-muted font-13"><strong>Name :</strong> <span class="m-l-15">{{ $m->user->name}}</span></p>
                        <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{ $m->user->email}}</span></p>
                        <p class="text-muted font-13"><strong>height :</strong> <span class="m-l-15">{{ $m->tall}} cm</span></p>
                        <p class="text-muted font-13"><strong>weight :</strong> <span class="m-l-15">{{ $m->wight}} kg</span></p>
                        <p class="text-muted font-13"><strong>goal :</strong> <span class="m-l-15">{{ $m->goal }}</span></p>
                    </div>

                    <ul class="social-links list-inline m-t-30">
                        <li>
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                        </li>
                    </ul>
                </div>
            </div> 
        </div> 
        @endforeach
        @endif



        <div class="col-md-8 col-lg-9">
            <div class="">
                <div class="">
                    <ul class="nav nav-tabs navtab-custom">
          
                        <li class="">
                            <a href="#profile" data-toggle="tab" aria-expanded="true">
                                <span class="visible-xs"><i class="fa fa-photo"></i></span>
                                <span class="hidden-xs">My Classes</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#settings" data-toggle="tab" aria-expanded="false">
                                <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                <span class="hidden-xs">SETTINGS</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                     
                        <div class="tab-pane active" id="profile">
                            <div class="row">

                                @if ($gymclass->isEmpty())
                                
                                <h2>no classes found </h2>

                                @endif

                                @if ($gymclass->isNotEmpty())
                                @foreach ($gymclass as $class) 
                                <div class="col-sm-4">
                                    <h4 class="product-title"><a href="{{ route('Class_details', $class->class->id) }}"></a></h4>
                                    <div class="gal-detail thumb">
                                        <a href="#" class="image-popup" title="Screenshot-2">
                                            <img src="/storage/{{ $class->class->classroom->image}}" class="thumb-img" alt="work-thumbnail">
                                        </a>
                                        <h4 class="text-center">{{ $class->class->title }}</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>{{ $class->created_at->format('Y,M,D') }}</small></p>

                                        <div class="text-center">
                                            <form action="{{ route('cancel_class',$class->id) }}" method="POST">
                                                @csrf

                                                <button type="submit" class="btn py-1 bg-danger text-center text-light" onclick="return confirm('are u sure you want to cancel this class')">cancel</button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
    
                            </div>
                        </div>


                        @if ($member->isNotEmpty())
                        @foreach ($member as $m) 
                        <div class="tab-pane" id="settings">
                            <form role="form">
                                <div class="form-group">
                                    <label for="FullName">Name</label>
                                    <input type="text" value={{ $m->user->name }} Doe" id="FullName" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="Email">email</label>
                                    <input type="email" value={{ $m->user->email}} id="Email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="height">height</label>
                                    <input type="number" id="height" value={{ $m->tall}}  class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="wieght">wieght</label>
                                    <input type="number" id="wieght" value={{ $m->wight}}  class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="goal">Goal</label>
                                    <input type="text" value="{{ $m->goal }}" id="Username" class="form-control">
                                </div>
                     
                                <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
                            </form>
                        </div>
                        @endforeach
                        @endif



                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
</div>









<style>

.card-box {
  padding: 20px;
  box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.06), 0 2px 0 0 rgba(0, 0, 0, 0.02);
  -webkit-border-radius: 5px;
  border-radius: 5px;
  -moz-border-radius: 5px;
  background-clip: padding-box;
  margin-bottom: 20px;
  background-color: #ffffff;
}
.header-title {
  text-transform: uppercase;
  font-size: 15px;
  font-weight: 600;
  letter-spacing: 0.04em;
  line-height: 16px;
  margin-bottom: 8px;
}
.social-links li a {
  -webkit-border-radius: 50%;
  background: #EFF0F4;
  border-radius: 50%;
  color: #7A7676;
  display: inline-block;
  height: 30px;
  line-height: 30px;
  text-align: center;
  width: 30px;
}

/* ===========
   Gallery
 =============*/
.portfolioFilter a {
  -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
  -moz-transition: all 0.3s ease-out;
  -ms-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
  -webkit-transition: all 0.3s ease-out;
  box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
  color: #333333;
  padding: 5px 10px;
  display: inline-block;
  transition: all 0.3s ease-out;
}
.portfolioFilter a:hover {
  background-color: #228bdf;
  color: #ffffff;
}
.portfolioFilter a.current {
  background-color: #228bdf;
  color: #ffffff;
}
.thumb {
  background-color: #ffffff;
  border-radius: 3px;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);
  margin-top: 30px;
  padding-bottom: 10px;
  padding-left: 10px;
  padding-right: 10px;
  padding-top: 10px;
  width: 100%;
}
.thumb-img {
  border-radius: 2px;
  overflow: hidden;
  width: 100%;
}
.gal-detail h4 {
  margin: 16px auto 10px auto;
  width: 80%;
  white-space: nowrap;
  display: block;
  overflow: hidden;
  text-overflow: ellipsis;
}
.gal-detail .ga-border {
  height: 3px;
  width: 40px;
  background-color: #228bdf;
  margin: 10px auto;
}




.tabs-vertical-env .tab-content {
  background: #ffffff;
  display: table-cell;
  margin-bottom: 30px;
  padding: 30px;
  vertical-align: top;
}
.tabs-vertical-env .nav.tabs-vertical {
  display: table-cell;
  min-width: 120px;
  vertical-align: top;
  width: 150px;
}
.tabs-vertical-env .nav.tabs-vertical li.active > a {
  background-color: #ffffff;
  border: 0;
}
.tabs-vertical-env .nav.tabs-vertical li > a {
  color: #333333;
  text-align: center;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  white-space: nowrap;
}
.nav.nav-tabs > li.active > a {
  background-color: #ffffff;
  border: 0;
}
.nav.nav-tabs > li > a {
  background-color: transparent;
  border-radius: 0;
  border: none;
  color: #333333 !important;
  cursor: pointer;
  line-height: 50px;
  font-weight: 500;
  padding-left: 20px;
  padding-right: 20px;
  font-family: 'Roboto', sans-serif;
}
.nav.nav-tabs > li > a:hover {
  color: #228bdf !important;
}
.nav.tabs-vertical > li > a {
  background-color: transparent;
  border-radius: 0;
  border: none;
  color: #333333 !important;
  cursor: pointer;
  line-height: 50px;
  padding-left: 20px;
  padding-right: 20px;
}
.nav.tabs-vertical > li > a:hover {
  color: #228bdf !important;
}
.tab-content {
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  color: #777777;
}
.nav.nav-tabs > li:last-of-type a {
  margin-right: 0px;
}
.nav.nav-tabs {
  border-bottom: 0;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.navtab-custom li {
  margin-bottom: -2px;
}
.navtab-custom li a {
  border-top: 2px solid transparent !important;
}
.navtab-custom li.active a {
  border-top: 2px solid #228bdf !important;
}
.nav-tab-left.navtab-custom li a {
  border: none !important;
  border-left: 2px solid transparent !important;
}
.nav-tab-left.navtab-custom li.active a {
  border-left: 2px solid #228bdf !important;
}
.nav-tab-right.navtab-custom li a {
  border: none !important;
  border-right: 2px solid transparent !important;
}
.nav-tab-right.navtab-custom li.active a {
  border-right: 2px solid #228bdf !important;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus,
.tabs-vertical-env .nav.tabs-vertical li.active > a {
  border: none;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:focus,
.nav-tabs > li.active > a:hover,
.tabs-vertical > li.active > a,
.tabs-vertical > li.active > a:focus,
.tabs-vertical > li.active > a:hover {
  color: #228bdf !important;
}

.nav.nav-tabs + .tab-content {
    background: #ffffff;
    margin-bottom: 20px;
    padding: 20px;
}
.progress.progress-sm .progress-bar {
    font-size: 8px;
    line-height: 5px;
}

</style>

@endsection