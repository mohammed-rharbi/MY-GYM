<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-darkpurple sidebar collapse">
    <div class="sidebar-sticky">
        <!-- Logo -->
        <div class="sidebar-logo text-center mb-4">
            <a {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ route('admin.index') }}">
                <img src="{{ asset('images/logo.png') }}" height="55" alt="MDB Logo" loading="lazy" />
            </a>
        </div>
        <!-- Navigation -->
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" href="{{ route('admin.index') }}">
                    <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('users') ? 'active' : '' }}" href="{{ route('getusers') }}">
                    <i class="fas fa-users mr-2"></i>Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('article') ? 'active' : '' }}" href="{{ route('article.index') }}">
                    <i class="fas fa-newspaper mr-2"></i>Articles
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('classes') ? 'active' : 'classes' }}" href="{{ route('allclasses') }}">
                    <i class="fas fa-chalkboard-teacher mr-2"></i>Classes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('category') ? 'active' : '' }}" href="{{ route('category.index') }}">
                    <i class="fas fa-list-alt mr-2"></i>Categories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('class_type') ? 'active' : '' }}" href="{{ route('class_type.index') }}">
                    <i class="fas fa-list-alt mr-2"></i>classes type
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('Traning_Room') ? 'active' : '' }}" href="{{ route('Traning_Room.index') }}">
                    <i class="fas fa-list-alt mr-2"></i>Traning Room
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
            background-color: #8745458e; 
            border-right: 1px solid #dee2e6;
        }

    .sidebar-sticky {
        padding-top: 20px;
    }

    .sidebar .nav-link {
        font-weight: 500;
        color: #fff; 
        padding: 10px 20px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .sidebar .nav-link.active {
        color: #ffc107; 
        background-color: #4f4760; 
        border-right: 3px solid #ffc107; 
    }

    .sidebar .nav-link:hover {
        background-color: #483d8b; 
        color: #ffd700; 
    }

    .sidebar .nav-link i {
        min-width: 30px;
    }

    .sidebar .nav-link:hover i {
        color: #ffd700; 
    }

    .sidebar .nav-item {
        margin-bottom: 5px; 
    }

    .sidebar-heading {
        font-size: 0.9rem;
        font-weight: 600;
        color: #6c757d;
        padding: 10px 20px;
    }

</style>
