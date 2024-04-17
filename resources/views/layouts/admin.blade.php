<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom styles -->
    <style>
        /* Adjust main content padding */
        .main-content {
            height: 100%;
            padding-top: 56px; /* Height of the fixed navbar */
        }

        #bb{
            background-image: url('/public/images/golden-glitter-powder-dust-bursting-background-illustration.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; 
}

        /* .custom-bg-color {
    background-color: #4c3e06; 
} */

    </style>
</head>
<body class="bg-dark" >
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark shadow custom-bg-color">
    <div class="container-fluid">
        <a class="navbar-brand mr-auto" href="#">
            <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Admin Dashboard</a>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('adminprofile') }}">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}">Sign out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <!-- Sidebar -->
    @include('component.AdminSidebar')


    

    <div class="container-fluid main-content"  >
        <div class="row" >
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" >

                <div class="mt-5">
                    @if ($errors->any())
                        <div class="col-12">
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        </div>    
                    @endif
            
                    @if (session()->has('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>  
                    @endif
            
                    @if (session()->has('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>  
                  @endif
                </div>


                @yield('content')
            </main>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    

    @yield('scripts')

</body>
</html>
