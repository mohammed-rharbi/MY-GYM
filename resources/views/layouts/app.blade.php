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
        .main-content {
            padding-top: 80px; /* Add padding to the top */
            min-height: calc(100vh - 80px); /* Make the main content fill the remaining viewport height */
        }

        .alert {
            margin-top: 20px;
        }
    </style>
</head>
<body class="bg-dark">
    
    <div class="container-fluid main-content bg-dark">
        <div class="row">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

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
</body>
</html>
