@extends('layouts.member')
@section('content')
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portfolio Details</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li>Portfolio Details</li>
                    </ol>
                </div>

            </div>
        </section><!-- Breadcrumbs Section -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                            <div class="swiper-wrapper align-items-center" id="swiper-wrapper-03a3121122f539d1" aria-live="off" style="transform: translate3d(-2568px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 856px;">
                                    <img src="{{asset('frontend/assets/img/portfolio/portfolio-details-3.jpg')}}" alt="">
                                </div>

                                <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 856px;">
                                    <img src="{{asset('frontend/assets/img/portfolio/portfolio-details-1.jpg')}}" alt="">
                                </div>

                                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 856px;">
                                    <img src="{{asset('frontend/assets/img/portfolio/portfolio-details-2.jpg')}}" alt="">
                                </div>

                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 856px;">
                                    <img src="{{asset('frontend/assets/img/portfolio/portfolio-details-3.jpg')}}" alt="">
                                </div>

                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 856px;">
                                    <img src="{{asset('frontend/assets/img/portfolio/portfolio-details-1.jpg')}}" alt="">
                                </div></div>
                            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: Web design</li>
                                <li><strong>Client</strong>: ASU Company</li>
                                <li><strong>Project date</strong>: 01 March, 2020</li>
                                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>This is an example of portfolio detail</h2>
                            <p>
                                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->
@endsection
