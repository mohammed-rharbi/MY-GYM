<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: rgba(0, 0, 0, 0.5); backdrop-filter: blur(10px);">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/storage/{{'images/logo.png' }}" height="55" alt="MDB Logo" loading="lazy" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                @if (auth()->user() && auth()->user()->Role == 'coach')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('articles') }}">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('coach.index') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.showprofile') }}">Profile</a>
                </li>
                @endif
                @if ( auth()->user() && auth()->user()->Role == 'member' )
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('member.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('articles') }}">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Gym_Classes') }}">Classes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('classRooms') }}">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('My_profil') }}">Profile</a>
                </li>
                @endif
                @if (!Auth::user())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                @endif
                <ul class="navbar-nav mb-2 mb-lg-0">
                    @auth
                    <li class="nav-item">
                        <a href="{{ route('logout') }}">
                            <button type="submit" class="btn btn-danger">Sign Out</button>
                        </a>
                    </li>
                    @endauth
                </ul>
            </ul>
        </div>
    </div>
</nav>

<style>


.navbar {
    background-color: rgba(0, 0, 0, 0.5) !important; 
    backdrop-filter: blur(10px); 
    border-bottom: 1px solid rgba(255, 255, 255, 0.2); 
}

    .navbar-nav .nav-item .nav-link {
        font-size: 18px;
        position: relative;
        transition: color 0.3s;
    }

    .navbar-nav .nav-item .nav-link:hover {
        color: #f19100;
    }

    .navbar-nav .nav-item .nav-link::after {
        content: "";
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        background-color: #fff;
        transition: width 0.3s;
    }

    .navbar-nav .nav-item .nav-link:hover::after {
        width: 100%;
    }

    .navbar-toggler {
        border: none;
    }

    .navbar-toggler:focus {
        outline: none;
    }

    .navbar-brand img {
        max-width: 150px; /* Limit the logo width */
    }

    .btn-danger {
        background-color: #dc3545; /* Red color for sign out button */
        border-color: #dc3545; /* Red color for button border */
    }

    .btn-danger:hover {
        background-color: #c82333; /* Darker red color on hover */
        border-color: #c82333; /* Darker red color for button border on hover */
    }
</style>
