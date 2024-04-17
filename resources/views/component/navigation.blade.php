<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-light mt-3" style="background-color: transparent;">
  <!-- Container wrapper -->
  <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="{{ route('home') }}">
          <img src="{{ asset('images/logo.png') }}" height="55" alt="MDB Logo" loading="lazy" />
      </a>
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <!-- Left links -->
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('home') }}" style="font-size: 18px; color: white;">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="" style="font-size: 18px; color: white;">Articles</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#" style="font-size: 18px; color: white;">About Us</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#" style="font-size: 18px; color: white;">Contact</a>
              </li>
              @if (Auth::user())
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}" style="font-size: 18px; color: white;">Logout</a>
              </li>
              @if (Auth::user()->Role == 'coach')
              <li class="nav-item">
                <a class="nav-link"  href="{{ route('coach.index') }}" style="font-size: 18px; color: white;">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile.showprofile') }}"  style="font-size: 18px; color: white;">Profile</a>
            </li>
              @endif
              @else
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}" style="font-size: 18px; color: white;">Register</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}" style="font-size: 18px; color: white;">Login</a>
              </li>
              @endif

              
            
          </ul>
          <!-- Right elements -->
          @if (Auth::user())
          <ul class="navbar-nav ms-auto">
              <!-- Avatar -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <img src="{{ asset('images/pexels-andrea-piacquadio-3836883.jpg') }}" class="rounded-circle" height="45" width="45"
                          alt="Avatar" loading="lazy" />
                  </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                  <li><a class="dropdown-item" href="#">My profile</a></li>
                  <li><a class="dropdown-item" href="#">Settings</a></li>
                  <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
              </ul>
              </li>
          </ul>
          @endif
      </div>
      <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
