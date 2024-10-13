@extends('layout.main')
@section ('headnfoot')

@include('partials.navbar')
<main class="main">

    <!-- About Section -->
    <section id="about" class="about section" style="padding: 0">
      <div class="banner">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 1000,
                  "autoplay": {
                    "delay": 4000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                
                <div class="swiper-slide">
                 <span class="omaga" style="opacity: 1;">
                     <header>
                        <span class="panel-title">history</span>
                        <br>
                        <span class="title">Story of Museum Tugu Pahlawan</span>
                      </header>
                      <a href="{{ url('/BookTour') }}" class="btn btn-get-started">LEARN MORE</a>
                      </span>
                  <img src="assets/img/img_a_1.jpg" alt="Image" class="img-fluid">
                  <span class="bg-gradasi" style="opacity: 1;"></span>
                  <span class="bg-overlay" style="opacity: 1;"></span>
                  <span class="black-bg" style="opacity: 1;"></span>
                </div>

                <div class="swiper-slide">
                 <span class="omaga" style="opacity: 1;">
                     <header>
                        <span class="panel-title">history</span>
                        <br>
                        <span class="title">Story of Museum Tugu Pahlawan</span>
                      </header>
                      <a href="{{ url('/BookTour') }}" class="btn btn-get-started">LEARN MORE</a>
                      </span>
                  <img src="assets/img/img_a_2.jpg" alt="Image" class="img-fluid">
                  <span class="bg-gradasi" style="opacity: 1;"></span>
                  <span class="bg-overlay" style="opacity: 1;"></span>
                  <span class="black-bg" style="opacity: 1;"></span>
                </div>

                <div class="swiper-slide">
                 <span class="omaga" style="opacity: 1;">
                     <header>
                        <span class="panel-title">history</span>
                        <br>
                        <span class="title">Story of Museum Tugu Pahlawan</span>
                      </header>
                      <a href="{{ url('/BookTour') }}" class="btn btn-get-started">LEARN MORE</a>
                      </span>
                  <img src="assets/img/img_a_3.jpg" alt="Image" class="img-fluid">
                  <span class="bg-gradasi" style="opacity: 1;"></span>
                  <span class="bg-overlay" style="opacity: 1;"></span>
                  <span class="black-bg" style="opacity: 1;"></span>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
    </section><!-- /About Section -->

    <section id="portfolio-details" class="portfolio-details section" style="padding: 0;">

    <div class="container" data-aos="fade-up">

        <div class="row justify-content-between gy-4 mt-4">
        <div class="portfolio-description">
        <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Percaya dan yakinlah bahwa kemerdekaan satu negara yang didirikan di atas timbunan runtuhan ribuan jiwa, harta benda dari rakyat dan bangsanya tidak akan dapat dilenyapkan oleh manusia, siapa pun juga.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div>
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Jendral Soedirman</h3>
                  <h4>the first commander of the Indonesian</h4>
                </div>
              </div>
              </div>
              </div>
              </section>

<!-- About Section -->
        <section id="about" class="about section">

<div class="container">
  <div class="row align-items-center justify-content-between">
    <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 1,
                "spaceBetween": 40
              },
              "1200": {
                "slidesPerView": 1,
                "spaceBetween": 1
              }
            }
          }
        </script>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="assets/img/img_h_9.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="swiper-slide">
            <img src="assets/img/img_h_10.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="swiper-slide">
            <img src="assets/img/img_h_11.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <div class="col-lg-4 order-lg-1">
      <span class="section-subtitle" data-aos="fade-up">Welcome To</span>
      <h1 class="mb-4" data-aos="fade-up">
        Museum Tugu Pahlawan
      </h1>
      <p data-aos="fade-up" style="margin-bottom: 2rem;">
      Temukan sejarah heroik perjuangan kemerdekaan Indonesia melalui koleksi kami yang beragam. Mari bersama-sama menghormati jasa para pahlawan dan menginspirasi generasi masa depan.
      </p>
      <p class="mb-4" data-aos="fade-up">
        <a href="{{ url('/ticket') }}" class="btn btn-get-started"> BUY TICKET</a>
      </p>
    </div>
  </div>
</div>
</section><!-- /About Section -->


    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>Recent Posts</p>
        <h2>Blog Posts</h2>
      </div><!-- End Section Title -->
      <div class="container">

        <div class="row gy-4">
          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
              <a href="#" class="thumb d-block"><img src="assets/img/img_h_4.jpg" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <a href="#" class="cat">Development</a> •
                  <span class="date">July 20, 2020</span>
                </div>
                <h3><a href="#">There live the blind texts they live</a></h3>
                <p>
                  Far far away, behind the word mountains, far from the countries
                  Vokalia and Consonantia, there live the blind texts.
                </p>

                <div class="d-flex author align-items-center">
                  <div class="pic">
                    <img src="assets/img/team/team-3.jpg" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author-name">
                    <strong class="d-block">Winston Gold</strong>
                    <span class="">Lead Product Designer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="200">
              <a href="#" class="thumb d-block"><img src="assets/img/img_h_2.jpg" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <a href="#" class="cat">Development</a> •
                  <span class="date">July 20, 2020</span>
                </div>
                <h3><a href="#">There live the blind texts they live</a></h3>
                <p>
                  Far far away, behind the word mountains, far from the countries
                  Vokalia and Consonantia, there live the blind texts.
                </p>

                <div class="d-flex author align-items-center">
                  <div class="pic">
                    <img src="assets/img/team/team-2.jpg" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author-name">
                    <strong class="d-block">Winston Gold</strong>
                    <span class="">Lead Product Designer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
              <a href="#" class="thumb d-block"><img src="assets/img/img_h_3.jpg" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <a href="#" class="cat">Development</a> •
                  <span class="date">July 20, 2020</span>
                </div>
                <h3><a href="#">There live the blind texts they live</a></h3>
                <p>
                  Far far away, behind the word mountains, far from the countries
                  Vokalia and Consonantia, there live the blind texts.
                </p>

                <div class="d-flex author align-items-center">
                  <div class="pic">
                    <img src="assets/img/team/team-1.jpg" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author-name">
                    <strong class="d-block">Winston Gold</strong>
                    <span class="">Lead Product Designer</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Blog Posts Section -->

  </main>
@endsection
