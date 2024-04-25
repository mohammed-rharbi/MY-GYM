<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-darkpurple sidebar collapse">
    <div class="sidebar-sticky">
        <!-- Logo -->
        <div class="sidebar-logo text-center mb-4">
            <ul class="navbar-nav ms-auto">
                  <!-- Avatar -->
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          <img src="{{ asset('images/pexels-andrea-piacquadio-3836883.jpg') }}" class="rounded-circle" height="65" width="65"
                              alt="Avatar" loading="lazy" />
                      </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                      <li><a class="dropdown-item" href="{{ route('profile.showprofile') }}">My profile</a></li>
                      <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                  </ul>
                  </li>
              </ul>
        </div>
        <!-- Navigation -->
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('coach') ? 'active' : '' }}"  href="{{ route('coach.index') }}">
                    <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('article') ? 'active' : '' }}" href="{{ route('My_Article') }}" >
                    <i class="fas fa-newspaper mr-2"></i>Articles
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('class') ? 'active' : 'classes' }}" href="{{ route('class.index') }}">
                    <i class="fas fa-chalkboard-teacher mr-2"></i>Classes
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('traniers') ? 'active' : 'classes' }}" href="{{ route('mytraniers') }}">
                    <i class="fas fa-chalkboard-teacher mr-2"></i>My Trainers
                </a>
            </li>
        </ul>
    </div>
</nav>

<style>
    
    .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            background-color: #4b0082; /* Dark purple background color */
            border-right: 1px solid #dee2e6; /* Add a border on the right */
        }

    .sidebar-sticky {
        padding-top: 20px;
    }

    .sidebar .nav-link {
        font-weight: 500;
        color: #fff; /* White text color */
        padding: 10px 20px; /* Add padding to the links */
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .sidebar .nav-link.active {
        color: #ffc107; /* Yellow active link color */
        background-color: #6a5acd; /* Background color for the active link */
        border-right: 3px solid #ffc107; /* Highlight active link with border on the right */
    }

    .sidebar .nav-link:hover {
        background-color: #483d8b; /* Darker purple background color on hover */
        color: #ffd700; /* Yellow text color on hover */
    }

    .sidebar .nav-link i {
        min-width: 30px; /* Ensure icons have consistent width */
    }

    .sidebar .nav-link:hover i {
        color: #ffd700; /* Yellow icon color on hover */
    }

    .sidebar .nav-item {
        margin-bottom: 5px; /* Add margin between navigation items */
    }

    .sidebar-heading {
        font-size: 0.9rem;
        font-weight: 600;
        color: #6c757d;
        padding: 10px 20px;
    }

</style>
