<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ env('APP_NAME') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('logos/teamup fav-icon.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: BizPage - v5.8.0
    * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <style>
        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button1 {
            background-color: #4CAF50;
        }

        /* Green */
        .button2 {
            background-color: #008CBA;
        }

        /* Blue */
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid">

            <div class="row justify-content-center align-items-center">
                <div class="col-xl-11 d-flex align-items-center justify-content-between">
                    <h1 class="logo"><a href="{{ route('user.dashboard') }}">TeamUP</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html" class="logo"><img src="{{ asset('') }}/img/logo.png" alt="" class="img-fluid"></a>-->

                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                            <li><a class="nav-link scrollto" href="#about">About</a></li>
                            <li><a class="nav-link scrollto" href="#services">Services</a></li>
                            <!--<li><a class="nav-link scrollto" href="#team">Team</a></li>
                        <li><a class="nav-link  " href="blog.html">Blog</a></li>-->
                            <li class="dropdown"><a href="#portfolio"><span>Clubs</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#">Art Club</a></li>
                                    <li class="dropdown"><a href="#"><span>Sport Clubs</span> <i
                                                class="bi bi-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="#">Cricket</a></li>
                                            <li><a href="#">Badminton</a></li>
                                            <li><a href="#">Football</a></li>
                                            <li><a href="#">Tenis</a></li>
                                            <li><a href="#">Base Ball</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Media & Publication Groups</a></li>
                                    <li><a href="#">Cultural Clubs</a></li>
                                    <li><a href="#">Religious & Spiritual Groups</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                            @if (Route::has('login'))
                                @auth
                                    <li><a class="nav-link scrollto active" href="{{route('dashboard')}}">Dashboard</a></li>
                                @else
                                    <li><a class="nav-link scrollto active" href="{{ route('login') }}">Log in</a></li>

                                    @if (Route::has('register'))
                                        <li><a class="nav-link scrollto active"
                                                href="{{ route('register') }}">Register</a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
                </div>
            </div>


        </div>
    </header><!-- End Header -->

    <!-- ======= hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active"
                        style="background-image: url({{ asset('frontend/assets/img/hero-carousel/1.jpg') }})">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Welcome!</h2>
                                <h3 p class="animate__animated animate__fadeInUp text-white">
                                    {{ $welcome->statement }}
                                    </p>
                                </h3>
                                <a href="#featured-services"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>

                    @foreach ($home_sliders as $home_slider)
                        <div class="carousel-item" style="background-image: url({{ asset($home_slider->image) }});">
                            <div class="carousel-container">
                                <div class="container" style="font-size: 150%;">
                                    <h2 class="animate__animated animate__fadeInDown">{{ $home_slider->name }}</h2>
                                    <p class="animate__animated animate__fadeInUp">{{ $home_slider->description }}
                                    </p>
                                    <a href="#featured-services"
                                        class="btn-get-started scrollto animate__animated animate__fadeInUp">Join Club</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

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

    <main id="main">

        <!-- ======= Featured Services Section Section ======= -->
        {{-- <section id="featured-services">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 box">
                        <i class="bi bi-briefcase"></i>
                        <h4 class="title"><a href="">Sport Club</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi
                            sint occaecati cupiditate non provident</p>
                        <button class="button button1">Join Now</button>
                        <button class="button button2">More</button>
                    </div>

                    <div class="col-lg-4 box box-bg">
                        <i class="bi bi-card-checklist"></i>
                        <h4 class="title"><a href="">Art Club</a></h4>
                        <p class="description">If theater is a big priority for you in college, learn which kinds of
                            performance opportunities exist. Musical groups are easy to find in many universities as
                            well.
                            Join a group focused on your degree and increase your skills in an area you are passionate
                            about. </p>
                        <button class="button button1">Join Now</button>
                        <button class="button button2">More</button>
                    </div>

                    <div class="col-lg-4 box box-bg">
                        <i class="bi bi-card-checklist"></i>
                        <h4 class="title"><a href="">Media & Publication Groups</a></h4>
                        <p class="description">A media or publication club focuses on producing a university
                            newspaper,
                            website, or broadcast. Many student-run newspapers are real influencers, both in university
                            and
                            in the community. Employers are pleased to see this activity on your résumé as it matches
                            your
                            career ambitions.</p>
                        <button class="button button1">Join Now</button>
                        <button class="button button2">More</button>
                    </div>
                </div>
            </div>
        </section><!-- End Featured Services Section --> --}}

        <!-- ======= About Us Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>About Us</h3>
                    <p> {{ $about->statement }}</p>
                </header>

                <div class="row about-cols">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="about-col" style="min-height: 75vh !important">
                            <div class="img">
                                <img src="{{ asset('frontend/assets/img/about-mission.jpg') }}" alt=""
                                    class="img-fluid">
                                <div class="icon"><i class="bi bi-bar-chart"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Mission</a></h2>
                            <p>
                                {{ $mission->statement }}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="about-col" style="min-height: 75vh !important">
                            <div class="img">
                                <img src="{{ asset('frontend/assets/img/about-plan.jpg') }}" alt=""
                                    class="img-fluid">
                                <div class="icon"><i class="bi bi-brightness-high"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Plan</a></h2>
                            <p>
                                {{ $plan->statement }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="about-col" style="min-height: 75vh !important">
                            <div class="img">
                                <img src="{{ asset('frontend/assets/img/about-vision.jpg') }}" alt=""
                                    class="img-fluid">
                                <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Our Vision</a></h2>
                            <p>
                                {{ $vision->statement }}
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
                    <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant
                        vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta
                        zanos paradigno tridexa panatarel.</p>
                </header>

                <div class="row">

                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-briefcase"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi
                            sint occaecati cupiditate non provident</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea
                            commodo consequat tarad limino ata</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bi bi-bar-chart"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore
                            eu fugiat nulla pariatur</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-binoculars"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia
                            deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis
                            praesentium voluptatum deleniti atque</p>
                    </div>
                    <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                            tempore,
                            cum soluta nobis est eligendi</p>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="section-bg">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3 class="section-title">Clubs</h3>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class=" col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach ($club_categories as $club_category)
                                @php($filter = str_replace(' ', '_', $club_category->category_name))
                                <li data-filter=".{{ strtolower($filter) }}">
                                    {{ $club_category->category_name }}
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($clubs as $club)
                        @php($filter = str_replace(' ', '_', $club->category_name))
                        <div class="col-lg-4 col-md-6 portfolio-item cultural">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{ asset($club->image) }}" class="img-fluid" alt="">
                                    <a href="{{ route('user.club.register', $club->id) }}" data-lightbox="portfolio"
                                        data-title="App 1" class="link-preview"><i class="bi bi-plus"></i></a>
                                    <a href="{{ route('club.view', $club->id) }}" class="link-details"
                                        title="More Details"><i class="bi bi-link"></i>
                                    </a>
                                </figure>

                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html">{{ $club->name }}</a></h4>
                                    <p>{{ $club->description }}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                    @endforeach
                </div>
                {{ $clubs->links('components.pagination') }}
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Call To Action Section ======= -->
        {{-- <section id="call-to-action">
            <div class="container text-center" data-aos="zoom-in">
                <h3>Call To Action</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est
                    laborum.</p>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>
        </section><!-- End Call To Action Section --> --}}

        <!-- ======= Skills Section ======= -->
        {{-- <section id="skills">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Our Skills</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut
                        aliquip</p>
                </header>

                <div class="skills-content">

                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="skill">HTML <i class="val">100%</i></span>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="skill">CSS <i class="val">90%</i></span>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="skill">JavaScript <i class="val">75%</i></span>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="skill">Photoshop <i class="val">55%</i></span>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Skills Section --> --}}

        <!-- ======= Facts Section ======= -->
        <section id="facts">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>All</h3>
                    <p>Contents of Teamup</p>
                </header>

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Clubs</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Presidents</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="1364" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Members</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Admins</p>
                    </div>

                </div>

                {{-- <div class="facts-img">
                    <img src="{{ asset('frontend/assets/img/facts-img.png') }}" alt="" class="img-fluid">
                </div> --}}

            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Portfolio Section ======= -->
        {{-- <section id="portfolio" class="section-bg">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3 class="section-title">Clubs</h3>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class=" col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            @foreach ($club_categories as $club_category)
                                @php($filter = str_replace(' ', '_', $club_category->category_name))
                                <li data-filter=".{{ strtolower($filter) }}">
                                    {{ $club_category->category_name }}
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($clubs as $club)
                        @php($filter = str_replace(' ', '_', $club->category_name))
                        <div class="col-lg-4 col-md-6 portfolio-item cultural">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{ asset($club->image) }}" class="img-fluid" alt="">
                                    <a href="{{ route('user.club.register', $club->id) }}" data-lightbox="portfolio"
                                        data-title="App 1" class="link-preview"><i class="bi bi-plus"></i></a>
                                    <a href="{{ route('club.view', $club->id) }}" class="link-details"
                                        title="More Details"><i class="bi bi-link"></i>
                                    </a>
                                </figure>

                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html">{{ $club->name }}</a></h4>
                                    <p>{{ $club->description }}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                    @endforeach
                </div>
                {{ $clubs->links('components.pagination') }}
            </div>
        </section><!-- End Portfolio Section --> --}}

        <!-- ======= Our Clients Section ======= -->
        {{-- <section id="clients">
            <div class="container" data-aos="zoom-in">

                <header class="section-header">
                    <h3>Our Clients</h3>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img
                                src="{{ asset('frontend/assets/img/clients/client-1.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('frontend/assets/img/clients/client-2.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('frontend/assets/img/clients/client-3.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('frontend/assets/img/clients/client-4.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('frontend/assets/img/clients/client-5.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('frontend/assets/img/clients/client-6.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('frontend/assets/img/clients/client-7.png') }}" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img
                                src="{{ asset('frontend/assets/img/clients/client-8.png') }}" class="img-fluid"
                                alt=""></div>
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
                                <img src="{{ asset('frontend/assets/img/testimonial-1.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    <img src="{{ asset('frontend/assets/img/quote-sign-left.png') }}"
                                        class="quote-sign-left" alt="">
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <img src="{{ asset('frontend/assets/img/quote-sign-right.png') }}"
                                        class="quote-sign-right" alt="">
                                </p>
                            </div>
                        </div><!-- End testimonial item --> --}}

                        {{-- <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('frontend/assets/img/testimonial-2.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    <img src="{{ asset('frontend/assets/img/quote-sign-left.png') }}"
                                        class="quote-sign-left" alt="">
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <img src="{{ asset('frontend/assets/img/quote-sign-right.png') }}"
                                        class="quote-sign-right" alt="">
                                </p>
                            </div>
                        </div><!-- End testimonial item --> --}}
{{--
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('frontend/assets/img/testimonial-3.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <img src="{{ asset('frontend/assets/img/quote-sign-left.png') }}"
                                        class="quote-sign-left" alt="">
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam
                                    duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <img src="{{ asset('frontend/assets/img/quote-sign-right.png') }}"
                                        class="quote-sign-right" alt="">
                                </p>
                            </div>
                        </div><!-- End testimonial item --> --}}

                        {{-- <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('frontend/assets/img/testimonial-4.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    <img src="{{ asset('frontend/assets/img/quote-sign-left.png') }}"
                                        class="quote-sign-left" alt="">
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat
                                    minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                    labore illum veniam.
                                    <img src="{{ asset('frontend/assets/img/quote-sign-right.png') }}"
                                        class="quote-sign-right" alt="">
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('frontend/assets/img/testimonial-5.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <p>
                                    <img src="{{ asset('frontend/assets/img/quote-sign-left.png') }}"
                                        class="quote-sign-left" alt="">
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <img src="{{ asset('frontend/assets/img/quote-sign-right.png') }}"
                                        class="quote-sign-right" alt="">
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section --> --}}

        <!-- ======= Team Section ======= -->
        {{-- <section id="team">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3>Team</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('frontend/assets/img/team-1.jpg') }}" class="img-fluid" alt="">
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
                            <img src="{{ asset('frontend/assets/img/team-2.jpg') }}" class="img-fluid" alt="">
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
                            <img src="{{ asset('frontend/assets/img/team-3.jpg') }}" class="img-fluid" alt="">
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
                            <img src="{{ asset('frontend/assets/img/team-4.jpg') }}" class="img-fluid" alt="">
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
        </section><!-- End Team Section --> --}}

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
                            <address>No:- 105 Passara Road, Badulla.</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+155895548855">+94 335672910</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">teamup@gmail.com</a></p>
                        </div>
                    </div>

                </div>

                <div class="form">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-4 footer-newsletter">
                        <img src="temup logo.png" alt="">
                    </div>


                    <div class="col-lg-3 col-md-8 footer-info">
                        <h3>TeamUp</h3>
                        <p>We are pleased to welcome you to the University club management system. We have an excellent reputation for creating 
                            innovative entrepreneurs. We aim to give every student in our care the best possible education to prepare them for
                            life beyond University. Through this system, you can view any club of the University and stay connected with us.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Clubs</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Contacts</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            105 Passara Road,
                            Badulla,<br>
                            Sri Lanka. <br>
                            <strong>Phone:</strong> +94 335672910<br>
                            <strong>Email:</strong> teamup@gmail.com <br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                    
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>#team12</strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('../frontend/assets/js/main.js') }}"></script>

</body>

</html>
