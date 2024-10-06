<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Museum Tugu Pahlawan</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/home') }}">Home</a></li>
          <li class="dropdown"><a href="#"><span>Visit</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ url('/plan') }}">Plan Your Visit</a></li>
              <li><a href="{{ url('/BookTour') }}">Book a Tour</a></li>
            </ul>
          </li>
          <div class="login">
          <li><a href="{{ url('/login') }}">Login</a></li>
          <div class="vertical"></div>
          <li><a href="{{ url('/sign-up') }}">Sign Up</a></li>
        </div>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>