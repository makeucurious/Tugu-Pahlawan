@extends('layout.main')
@section ('headnfoot')

@include('partials.navbar')
<main class="main">

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section" style="padding-top: 0;">
      <div class="banner">
        <div class="swiper init-swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
             <span class="apalah" style="opacity: 1;">
                 <header>
                    <span class="title">Plan Your Visit</span>
                  </header>
                  <a href="#" class="btn btn-get-started" style="padding: 15px 45px; font-size: 17px;">GET TICKET</a>
                  </span>
              <img src="assets/img/img_a_4.jpg" alt="Image" class="img-fluid">
              <span class="bg-gradasi" style="opacity: 1;"></span>
              <span class="bg-overlay" style="opacity: 1;"></span>
              <span class="black-bg" style="opacity: 1;"></span>
            </div>

          </div>
        </div>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row justify-content-between gy-4 mt-4">
          <div class="portfolio-title">
            <span class="panel-title">Welcome To The Museum</span>
          </div>

          <div style="width: 55%;" data-aos="fade-up">
            <div class="portfolio-description">
             
              <h2>Information</h2>
              <h3>Open Hours</h3>
              <p>
                Session 1: 8:00 a.m. - 10:00 a.m. <br>
                Session 2: 10:00 a.m. - 12:00 p.m. <br>
                Session 3: 12:00 p.m. - 15:00 p.m. <br>
              </p>
              <p>
                Advance purchase online is required to guarantee Museum entry and to receive key information before your visit.
              </p>

            </div>
          </div>

          <div style="width: 40%;" data-aos="fade-up" data-aos-delay="100">
          <div class="container">
              <h2 class="mb-4 fs-1">Admission</h2>
              <div class="row mb-3 font-weight-bold" style="font-weight: 600; font-size:20px; color: #4b0f11">
                <div class="col-8">Category</div>
                <div class="col-4 text-right">Price</div>
              </div>
              @foreach ($category as $data)
                <div class="row border-bottom py-2">
                  <div class="col-8">{{ $data->name }}</div>
                  <div class="col-4 text-right">{{ $data->price }}</div>
                </div>
              @endforeach
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

    <section style="padding-top: 0; font-family: poppins; font-size:13px;">
    <div class="container px-4">
  <div class="row">
    <div class="col">
     <div class="p-3"><i class="bi bi-exclamation-circle"></i> Ticket price can be changed anytime.</div>
    </div>
    <div class="col">
      <div class="p-3"><i class="bi bi-exclamation-circle"></i> Destination can be closed anytime.</div>
    </div>
    <div class="col">
      <div class="p-3"><i class="bi bi-exclamation-circle"></i> Operational time can be changed anytime.</div>
    </div>
  </div>
</div>
      </div>
    </section>

   <section id="about" class="about section" style="padding:0;"> 
    <div class="maps">
        <div class="directions">
        <span class="panel-title">getting here</span>
            <h1>Directions</h1>
            <div class="address">
                <p><i class="bi bi-geo-alt flex-shrink-0"></i> Jl. Pahlawan, Alun-alun Contong, Kec. Bubutan, Surabaya, Jawa Timur 60174</p>
                <p><i class="bi bi-telephone"></i> (031) 3571100</p>
            </div>
            <div class="transport-options">
                <div class="option">
                <i class="bi bi-bus-front"></i>
                    <p>TRANSPORT</p>
                </div>
                <div class="option">
                <i class="bi bi-car-front-fill"></i>
                    <p>DRIVE</p>
                </div>
                <div class="option">
                <i class="bi bi-bicycle"></i>
                    <p>CYCLE</p>
                </div>
                <div class="option">
                <i class="bi bi-person-walking"></i>
                    <p>WALK</p>
                </div>
            </div>
        </div>
        <div class="map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.958572578533!2d112.73528777400122!3d-7.245554992760864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f93fc001bc5d%3A0x110e38d8a6c23fbe!2sMonumen%20Tugu%20Pahlawan%20dan%20Museum%20Sepuluh%20Nopember%20Surabaya!5e0!3m2!1sid!2sid!4v1727842438006!5m2!1sid!2sid" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
   </section>


  </main>
@endsection