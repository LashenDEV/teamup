@extends('layouts.member')
@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ $club->name }}</h2>
                <ol>
                    <li><a href="{{ route('dashboard') }}">Home</a></li>
                    <li><a href="{{ route('club.view', $club->id) }}">{{ $club->name }}</a></li>
                    <li>{{ $club->name }} Details</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4" data-aos="fade-up">
                <div class="col-lg-12">
                    <div
                        class="portfolio-details-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                        <div class="swiper-wrapper align-items-center" id="swiper-wrapper-03a3121122f539d1"
                             aria-live="off"
                             style="transform: translate3d(-2568px, 0px, 0px); transition-duration: 0ms;">
                            <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0"
                                 role="group"
                                 aria-label="1 / 3" style="width: 400px;">
                                <img src="{{ asset($club->image) }}" alt="">
                            </div>
                            @foreach($club_image_sliders as $club_image_slider)
                                <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0"
                                     role="group"
                                     aria-label="1 / 3" style="width: 400px;">
                                    <img src="{{ asset($club_image_slider->slider_image) }}" alt="">
                                </div>
                            @endforeach
                        </div>
                        <div
                            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                            <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                  aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0"
                                                                          role="button"
                                                                          aria-label="Go to slide 2"></span><span
                                class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                role="button"
                                aria-label="Go to slide 3"></span></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>

                <div class="d-flex justify-content-center my-5">
                    <a href="{{route('user.club.register', $club->id)}}"><button class="btn btn-danger">Join Club</button></a>
                </div>
            </div>
            <div class="row gy-4 p-5">
            <div class="col-md-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://www.nsbm.ac.lk/wp-content/uploads/2019/09/aca_clubs_bg.jpg" class="d-block w-100" style="height-50" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://www.nsbm.ac.lk/wp-content/uploads/2019/09/aca_clubs_bg.jpg" class="d-block w-100" style="height-50" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://www.nsbm.ac.lk/wp-content/uploads/2019/09/aca_clubs_bg.jpg" class="d-block w-100" style="height-50" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>

            
            <div class="col-lg-12 p-3">
                <div class="row">
                    <div class="col-sm-6">
                       <h5 style=" text-align:left;"><i class="fa-solid fa-bell fa-1x fa-beat" style="color: #D0342C;"></i> Next Meeting</h5>
                    </div>
                    <div class="col-sm-6">
                       <a href="url"><h5 style=" text-align:right;">UpComming Meeting</h5></a>
                    </diV>
                    </div>
            </div>

              <div class="col-lg-12">
                    <div class="portfolio-info" data-aos="zoom-in">
                        <div class="col-md-12" data-aos="zoom-in">
                            <div class="row">
                                <div class="col-md-2 p-5">
                                    
                                    <div style=" text-align:center;">
                                        <h2><i class="fa-solid fa-handshake fa-3x" style="color: #00008B;"></i> <br>Meeting 01</h2>
                                    </div>
                                </div>
                                <div class="col-md-4 p-5">
                                    
                                    <div style=" text-align:left;">
                                       <ul> <h5>
                                           <li><strong>Meeting Title:-</strong><br><br><li>
                                           <li><strong>Date:-</strong><br><br><li>
                                           <li><strong>Time:-</strong><br><br></li>
                                           </h5>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 p-5">
                                    <div style=" text-align:left;">

                                        <ul><h5>
                                           <li><strong>Meeting Link:-</strong><br><br></li>
                                           <li><strong>Meeting Id:-</strong><br><br></li>
                                           <li><strong>Meeting Password:-</strong><br><br></li>
                                        </h5>
                                        </ul>
                                    </div>
                                </div>
                                
                        </div>
                    </div>
                </div>

               
                <div class="col-lg-12 p-5">
                    <div class="portfolio-info" data-aos="zoom-in">
                        <div class="align-items-center">
                            <h1>Get to know us</h1>
                        </div>
                        <div class="col-md-12" data-aos="zoom-in">
                            <div class="row">
                                <div class="col-md-4">
                                    <div style="width: 4px; align:center;">
                                        <img
                                            src="{{ asset('https://www.uwu.ac.lk/wp-content/uploads/National_Y_Model_2017_1.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <p data-aos="zoom-in">
                                        {{ $club->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                
               
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="portfolio-info" data-aos="fade-up">
                            <h3>Committee Members</h3>
                            <div class="text-center"> 
                            <ul>
                                <li class = "p-3"><img src="https://www.w3schools.com/howto/img_avatar.png" width="200px" style="border-radius: 58%" class="border border-primary border-5"><br><br><strong>President</strong><br> {{ $club->clubOwner->name }}</li>
                                <li class = "p-3"><img src="https://www.w3schools.com/howto/img_avatar.png" width="200px" style="border-radius: 58%" class="border border-primary border-5"><br><br><strong>Secretary</strong><br> {{ $club->clubOwner->name }} </li>
                                <li class = "p-3"><img src="https://www.w3schools.com/howto/img_avatar.png" width="200px" style="border-radius: 58%" class="border border-primary border-5"><br><br><strong>Treasurer</strong><br> {{ $club->clubOwner->name }} </li>
                            
                            </ul>
                            </div>
                            
                        </div>

                    </div>
                    <div class="col-lg-4 ">
                        <div class="portfolio-info h-100" data-aos="fade-up">
                            <h3>Vision</h3>
                            <p>
                                {{ $club->vision }}
                            </p>
                        </div>

                    </div>
                    <div class="col-lg-4 ">
                        <div class="portfolio-info h-100" data-aos="fade-up" margin-bottom="10px;">
                            <h3>Mission</h3>
                            <p>
                                {{ $club->mission }}
                            </p>
                        </div>

                    </div>
                </div>
            

            </div>
    </section><!-- End Portfolio Details Section -->
@endsection
