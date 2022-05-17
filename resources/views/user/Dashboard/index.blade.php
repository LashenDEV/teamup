@extends('layouts.member')
@section('content')
<!-- ======= hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active" style="background-image: url({{asset('frontend/assets/img/hero-carousel/1.jpg')}})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome!</h2>
                            <h3 p class="animate__animated animate__fadeInUp">Welcome to the club management system. Through our website you can learn about all the clubs that exist in the university. You can also register for any club online</p> </h3>
                            <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url({{asset('frontend/assets/img/hero-carousel/2.jpg')}})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">At vero eos et accusamus</h2>
                            <p class="animate__animated animate__fadeInUp">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                            <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url({{asset('frontend/assets/img/hero-carousel/3.jpg')}})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Temporibus autem quibusdam</h2>
                            <p class="animate__animated animate__fadeInUp">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                            <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url({{asset('frontend/assets/img/hero-carousel/4.jpg')}})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Nam libero tempore</h2>
                            <p class="animate__animated animate__fadeInUp">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                            <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url({{asset('frontend/assets/img/hero-carousel/5.jpg')}})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Magnam aliquam quaerat</h2>
                            <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </div>
</section><!-- End Hero Section -->
    <!-- ======= Featured Services Section Section ======= -->
    <section id="featured-services">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 box">
                    <i class="bi bi-briefcase"></i>
                    <h4 class="title"><a href="">Sport Club</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    <button class="button button1">Join Now</button>
                    <button class="button button2">More</button>
                </div>

                <div class="col-lg-4 box box-bg">
                    <i class="bi bi-card-checklist"></i>
                    <h4 class="title"><a href="">Art Club</a></h4>
                    <p class="description">If theater is a big priority for you in college, learn which kinds of performance opportunities exist. Musical groups are easy to find in many universities as well. Join a group focused on your degree and increase your skills in an area you are passionate about. </p>
                    <button class="button button1">Join Now</button>
                    <button class="button button2">More</button>
                </div>

                <div class="col-lg-4 box box-bg">
                    <i class="bi bi-card-checklist"></i>
                    <h4 class="title"><a href="">Media & Publication Groups</a></h4>
                    <p class="description">A media or publication club focuses on producing a university newspaper, website, or broadcast. Many student-run newspapers are real influencers, both in university and in the community. Employers are pleased to see this activity on your résumé as it matches your career ambitions.</p>
                    <button class="button button1">Join Now</button>
                    <button class="button button2">More</button>
                </div>

                <div class="col-lg-4 box box-bg">
                    <i class="bi bi-card-checklist"></i>
                    <h4 class="title"><a href="">Cultural Clubs</a></h4>
                    <p class="description">University is the time to celebrate what makes you unique. Join groups that celebrate racial, ethnic, and cultural diversity. Clubs cater to Sinhala, Tamil, Muslim, & Christian students. </p>
                    <button class="button button1">Join Now</button>
                    <button class="button button2">More</button>
                </div>


                <div class="col-lg-4 box">
                    <i class="bi bi-binoculars"></i>
                    <h4 class="title"><a href="">Religious & Spiritual Groups</a></h4>
                    <p class="description">University is a great place to explore and deepen your faith through study and connection with others. </p>
                    <button class="button button1">Join Now</button>
                    <button class="button button2">More</button>

                </div>

            </div>
        </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </header>

            <div class="row about-cols">

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('frontend/assets/img/about-mission.jpg')}}" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-bar-chart"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Mission</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('frontend/assets/img/about-plan.jpg')}}" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Plan</a></h2>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="about-col">
                        <div class="img">
                            <img src="{{asset('frontend/assets/img/about-vision.jpg')}}" alt="" class="img-fluid">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        </div>
                        <h2 class="title"><a href="#">Our Vision</a></h2>
                        <p>
                            Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
        <div class="container" data-aos="fade-up">

            <header class="section-header wow fadeInUp">
                <h3>Services</h3>
                <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p>
            </header>

            <div class="row">

                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bi bi-briefcase"></i></div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bi bi-card-checklist"></i></div>
                    <h4 class="title"><a href="">Dolor Sitema</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bi bi-bar-chart"></i></div>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bi bi-binoculars"></i></div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                    <h4 class="title"><a href="">Nemo Enim</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                    <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
        <div class="container text-center" data-aos="zoom-in">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="cta-btn" href="#">Call To Action</a>
        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Our Skills</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
            </header>

            <div class="skills-content">

                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">HTML <i class="val">100%</i></span>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">CSS <i class="val">90%</i></span>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">JavaScript <i class="val">75%</i></span>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">Photoshop <i class="val">55%</i></span>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Facts</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </header>

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Clients</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Projects</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="1364" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Hours Of Support</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="38" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Hard Workers</p>
                </div>

            </div>

            <div class="facts-img">
                <img src="{{asset('frontend/assets/img/facts-img.png')}}" alt="" class="img-fluid">
            </div>

        </div>
    </section><!-- End Facts Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3 class="section-title">Our Portfolio</h3>
            </header>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class=" col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{asset('frontend/assets/img/portfolio/app1.jpg')}}" class="img-fluid" alt="">
                        <a href="{{asset('frontend/assets/img/portfolio/app1.jpg')}}" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="bi bi-plus"></i></a>
                        <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">App 1</a></h4>
                        <p>App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{asset('frontend/assets/img/portfolio/web3.jpg')}}" class="img-fluid" alt="">
                        <a href="{{asset('frontend/assets/img/portfolio/web3.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 3"><i class="bi bi-plus"></i></a>
                        <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Web 3</a></h4>
                        <p>Web</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{asset('frontend/assets/img/portfolio/app2.jpg')}}" class="img-fluid" alt="">
                        <a href="{{asset('frontend/assets/img/portfolio/app2.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 2"><i class="bi bi-plus"></i></a>
                        <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">App 2</a></h4>
                        <p>App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{asset('frontend/assets/img/portfolio/card2.jpg')}}" class="img-fluid" alt="">
                        <a href="{{asset('frontend/assets/img/portfolio/card2.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
                        <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Card 2</a></h4>
                        <p>Card</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{asset('frontend/assets/img/portfolio/web2.jpg')}}" class="img-fluid" alt="">
                        <a href="{{asset('frontend/assets/img/portfolio/web2.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 2"><i class="bi bi-plus"></i></a>
                        <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Web 2</a></h4>
                        <p>Web</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{asset('frontend/assets/img/portfolio/app3.jpg')}}" class="img-fluid" alt="">
                        <a href="{{asset('frontend/assets/img/portfolio/app3.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
                        <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">App 3</a></h4>
                        <p>App</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{asset('frontend/assets/img/portfolio/card1.jpg')}}" class="img-fluid" alt="">
                        <a href="{{asset('frontend/assets/img/portfolio/card1.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
                        <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Card 1</a></h4>
                        <p>Card</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{asset('frontend/assets/img/portfolio/card3.jpg')}}" class="img-fluid" alt="">
                        <a href="{{asset('frontend/assets/img/portfolio/card3.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
                        <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Card 3</a></h4>
                        <p>Card</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{asset('frontend/assets/img/portfolio/web1.jpg')}}" class="img-fluid" alt="">
                        <a href="{{asset('frontend/assets/img/portfolio/web1.jpg')}}" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
                        <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-link"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">Web 1</a></h4>
                        <p>Web</p>
                    </div>
                </div>
            </div>

        </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients">
        <div class="container" data-aos="zoom-in">

            <header class="section-header">
                <h3>Our Clients</h3>
            </header>

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{asset('frontend/assets/img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Our Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-bg">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>Testimonials</h3>
            </header>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('frontend/assets/img/testimonial-1.jpg')}}" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                <img src="{{asset('frontend/assets/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <img src="{{asset('frontend/assets/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('frontend/assets/img/testimonial-2.jpg')}}" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <p>
                                <img src="{{asset('frontend/assets/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <img src="{{asset('frontend/assets/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('frontend/assets/img/testimonial-3.jpg')}}" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <p>
                                <img src="{{asset('frontend/assets/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <img src="{{asset('frontend/assets/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('frontend/assets/img/testimonial-4.jpg')}}" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <p>
                                <img src="{{asset('frontend/assets/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                <img src="{{asset('frontend/assets/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('frontend/assets/img/testimonial-5.jpg')}}" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <p>
                                <img src="{{asset('frontend/assets/img/quote-sign-left.png')}}" class="quote-sign-left" alt="">
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                <img src="{{asset('frontend/assets/img/quote-sign-right.png')}}" class="quote-sign-right" alt="">
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3>Team</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset('frontend/assets/img/team-1.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{asset('frontend/assets/img/team-2.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{asset('frontend/assets/img/team-3.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <img src="{{asset('frontend/assets/img/team-4.jpg')}}" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h3>Contact Us</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Address</h3>
                        <address>A108 Adam Street, NY 535022, USA</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="bi bi-phone"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="bi bi-envelope"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                </div>

            </div>

            <div class="form">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection
