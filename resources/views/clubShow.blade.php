@extends('layouts.member')
@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ $club->name }}</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
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
                    <div class="portfolio-details-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                        <div class="swiper-wrapper align-items-center" id="swiper-wrapper-03a3121122f539d1" aria-live="off"
                            style="transform: translate3d(-2568px, 0px, 0px); transition-duration: 0ms;">
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 856px;">
                                <img src="{{ asset('frontend/assets/img/portfolio/portfolio-details-3.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group"
                                aria-label="1 / 3" style="width: 856px;">
                                <img src="{{ asset('frontend/assets/img/portfolio/portfolio-details-1.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" role="group"
                                aria-label="2 / 3" style="width: 856px;">
                                <img src="{{ asset('frontend/assets/img/portfolio/portfolio-details-2.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" role="group"
                                aria-label="3 / 3" style="width: 856px;">
                                <img src="{{ asset('frontend/assets/img/portfolio/portfolio-details-3.jpg') }}" alt="">
                            </div>

                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0"
                                role="group" aria-label="1 / 3" style="width: 856px;">
                                <img src="{{ asset('frontend/assets/img/portfolio/portfolio-details-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div
                            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                            <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0"
                                role="button" aria-label="Go to slide 2"></span><span
                                class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                                aria-label="Go to slide 3"></span></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>

            </div>
            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="portfolio-info" data-aos="zoom-in">
                        <div class="align-items-center">
                        <h1>Get to know us</h1>
                        </div>
                        <div class="col-md-12" data-aos="zoom-in">
                            <div class="row">
                                <div class="col-md-4">
                                    <div style="width: 4px; align:center;">
                                        <img src="{{ asset('https://www.uwu.ac.lk/wp-content/uploads/National_Y_Model_2017_1.jpg') }}"
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
                        <div class="portfolio-info"data-aos="fade-up">
                            <h3>Club Information</h3>
                            <ul>
                                <li><strong>Club Name</strong>: {{ $club->name }}</li>
                                <li><strong>President</strong>: {{ $club->clubOwner->name }}</li>
                                <li><strong>Secretary</strong>: {{ $club->clubOwner->name }}</li>
                                <li><strong>Treasurer</strong>: {{ $club->clubOwner->name }}</li>

                            </ul>
                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" role="group"
                                aria-label="3 / 3" style="width: 5px;">
                                <img src="{{ asset('https://www.uwu.ac.lk/wp-content/uploads/National_Y_Model_2017_1.jpg') }}"
                                    alt="">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="portfolio-info"data-aos="fade-up">
                            <h3>Vision</h3>
                            <p>
                                {{ $club->vision }}
                            </p>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="portfolio-info"data-aos="fade-up" margin-bottom= "10px;">
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
