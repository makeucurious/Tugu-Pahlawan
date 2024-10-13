@extends('layout.main')
@section ('headnfoot')

@include('partials.navbar')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1>Sign Up</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Sign Up</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade">

        <div class="row gy-5 gx-lg-5">

          <div class="col-lg-4">

            <div class="info" style="margin-top: 2.2rem;">
              <h3 style="margin-bottom: 2rem;">Contact</h3>
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Jl. Pahlawan, Alun-alun Contong, Kec. Bubutan, Surabaya, Jawa Timur 60174</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">

          <div style="margin: 2rem 0 2rem 0 ;">
            <h2 style="font-weight: 600;">Create an account</h2>
            <p>Already have an account?
              <a href="login.html">Sign In</a>
            </p>
          </div>
            <form action="{{ route('register') }}" method="POST" class="php-email-form">
              @csrf
              <div class="row">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="First Name" required="">
                  @error('name')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                @error('email')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your phone" required="">
                @error('phone')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group mt-3">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
              @error('password')
                <div class="text-danger">{{ $message }}</div>
              @enderror
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="password_confirmation" id="password" placeholder="Password Confirmation" required="">
                @error('password_confirmation')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Sign Up</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>
@endsection