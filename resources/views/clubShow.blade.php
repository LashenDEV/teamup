@extends('layouts.member')
@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Art Club</h2>
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
                                        The Art Circle of Uva Wellasa University has been one of the most active
                                        societies of Uva Wellasa University since 2006. It is also one of the largest clubs
                                        in the university, with a member base of over 1000 students. This society
                                        has always played a main role in polishing the aesthetic talents of not
                                        only UWU students but also of Young university students from all over the island.
                                        The
                                        main duty of those at the Art Circle is to develop the student&apos;s talents
                                        to an extent of being recognized by other people in society. Also,
                                        the Art Circle works to pave a path for those talented students who
                                        wish to carry out their skills in the future.
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
                                <li><strong>Club Name</strong>: Art Club</li>
                                <li><strong>President</strong>: L.S. Kariywasam</li>
                                <li><strong>Secretary</strong>: L.S. Kariywasam</li>
                                <li><strong>Treasurer</strong>: L.S. Kariywasam</li>

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
                                Our vision is for the Vero Beach Art Club to be the voice and the representative of the
                                visual arts and artists of our community, and to be a beacon of Artistic endeavor for the
                                Treasure Coast. We will strive to do this by both continuing our existing programs and by
                                strengthening our ties to our growing artistic community. We will continue our established
                                programs as we seek to expand on them.
                            </p>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="portfolio-info"data-aos="fade-up" margin-bottom= "10px;">
                            <h3>Mission</h3>
                            <p>
                                To foster appreciation of art and artistic growth through exhibitions and educational
                                opportunities for its members. To extend cultural enrichment to the community at large by
                                exhibiting our artists' works at public locations in various venues around Indian River
                                County to stress the value and importance of art in the world. To offer scholarship
                                opportunities to students who wish to study art or go on to colleges for art related courses
                                and help financially support art programs through our schools and recreation department art
                                programs. To encourage and support both appreciation and creation of fine art.
                            </p>
                        </div>

                    </div>
                </div>


            </div>
    </section><!-- End Portfolio Details Section -->
@endsection
