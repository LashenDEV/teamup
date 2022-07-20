<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{env('APP_NAME')}}</title>
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
<header id="header" class="fixed-top d-flex align-items-center header-transparent" style="height:80px;">
    <div class="container-fluid">

        <div class="row justify-content-center align-items-center">
            <div class="col-xl-11 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="/"><img src="{{ asset('logos/teamup-logo-new.png') }}" alt="logo" style="width:50px;"
                                     class="img-fluid"></a> &nbsp &nbsp &nbsp
                    <h1 class="logo"><a href="/">TeamUp</a></h1>
                </div>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                        <li><a class="nav-link scrollto" href="#about">About</a></li>
                        <li><a class="nav-link scrollto" href="#services">Services</a></li>
                        <li class="dropdown"><a class="scrollto" href="#portfolio"><span>Clubs</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                @foreach ($clubs as $key => $club)
                                    @if($key <= 6)
                                        <li><a href="{{route('club.view',$club->id)}}">{{$club->name}}</a></li>
                                    @endif
                                @endforeach
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
                            <h3 class="animate__animated animate__fadeInUp text-white">
                                {{ $welcome->statement }}
                            </h3>
                            <a href="#portfolio"
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
                                <a href="{{route('club.view', $home_slider->id)}}"
                                   class="btn-get-started scrollto animate__animated animate__fadeInUp">View Club</a>
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
                <p></p>
            </header>

            <div class="row">

                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bi bi-pencil-square"></i></div>
                    <h4 class="title"><a href="">Registration Services</a></h4>
                    <p class="description">Any student of Uva Welassa University can register in TeamUp online.</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bi bi-coin"></i></div>
                    <h4 class="title"><a href="">Paying Services</a></h4>
                    <p class="description">Payments can be made online through PayPal while registering.</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bi bi-calendar2-date"></i></div>
                    <h4 class="title"><a href="">Meeting</a></h4>
                    <p class="description">Conducting meetings through an online zoom meeting tool.</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="bi bi-award"></i></div>
                    <h4 class="title"><a href="">Awarding</a></h4>
                    <p class="description">E-certificates are issued for the tournaments conducted through TeamUp.</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                    <h4 class="title"><a href="">Club Activities</a></h4>
                    <p class="description">TeamUp is a very supportive environment for the co-curricular activities of
                        students. They are encouraged to get
                        involved in the organizing of social activities, charity work, and activities pertaining to
                        their own personality development</p>
                </div>
                <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="bi bi-building"></i></div>
                    <h4 class="title"><a href="">Recreational Facilities</a></h4>
                    <p class="description">TeamUp recreational building consists of a swimming pool with 6 lanes, a
                        multi-purpose indoor sports building
                        including a basketball court, a badminton court, and a table tennis court./p>
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
                            @php($filter = preg_replace('/[^a-zA-Z0-9_.]/', '', $filter))
                            <li data-filter=".{{ strtolower($filter) }}">
                                {{ $club_category->category_name }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($clubs as $club)
                    @php($filter = str_replace(' ', '_', $club->category_name))
                    @php($filter = preg_replace('/[^a-zA-Z0-9_.]/', '', $filter))
                    <div class="col-lg-4 col-md-6 portfolio-item {{ strtolower($filter) }}">
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

    <!-- ======= Facts Section ======= -->
    <section id="facts">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h3>All</h3>
                <p>Contents of Teamup</p>
            </header>

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0"
                              data-purecounter-end="{{\App\Models\Clubs::where('approval', 1)->count()}}"
                              data-purecounter-duration="1"
                              class="purecounter"></span>
                    <p>Clubs</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0"
                              data-purecounter-end="{{\App\Models\User::where('role', 2)->count()}}"
                              data-purecounter-duration="1"
                              class="purecounter"></span>
                    <p>Presidents</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0"
                              data-purecounter-end="{{\App\Models\User::where('role', 3)->count()}}"
                              data-purecounter-duration="1"
                              class="purecounter"></span>
                    <p>Members</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1"
                              class="purecounter"></span>
                    <p>Projects</p>
                </div>

            </div>
        </div>
    </section><!-- End Facts Section -->

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
                        <address>No: 105 Passara Road, Badulla.</address>
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
                        <p><a href="mailto:info@example.com">teamup@info.com</a></p>
                    </div>
                </div>

            </div>

            <div class="form">
                <form action="{{route('contact-form.store')}}" method="POST" class="php-email-form">
                    @csrf
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
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                  required></textarea>
                    </div>
                    <div class="my-3">
                        @if (session('success'))
                            <div class="sent-message">{{ session('success') }}</div>
                        @endif
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
                <div class="d-flex justify-content-between flex-md-row flex-column">
                    <div
                        class="col-lg-2 col-md-4 footer-logo d-flex align-items-center justify-content-center pb-5 me-md-5">
                        <a href="/">
                            <img src="{{ asset('logos/teamup-logo-new.png') }}" alt="logo" style="width:300px;"
                                 class="img-fluid">
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-9 footer-info">
                        <h3>TeamUp</h3>
                        <p>We are pleased to welcome you to the University club management system. We have an excellent
                            reputation for creating
                            innovative entrepreneurs. We aim to give every student in our care the best possible
                            education to prepare them for
                            life beyond University. Through this system, you can view any club of the University and
                            stay connected with us.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Clubs</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contacts</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            105 Passara Road,<br>
                            Badulla,<br>
                            Sri Lanka. <br>
                            <strong>Phone:</strong> +94 335672910<br>
                            <strong>Email:</strong> teamup@gmail.com <br>
                        </p>

                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>TeamUp</strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">#team12</a>
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
