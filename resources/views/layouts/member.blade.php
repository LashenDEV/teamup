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

    <!-- Material Icons CDN -->
    <link rel="stylesheet"
          href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
<header id="header" class="fixed-top d-flex align-items-center" style="height:80px;">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-11 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="{{route('dashboard')}}"><img src="{{ asset('logos/teamup-logo-new.png') }}" alt="logo"
                                                          style="width:50px;"
                                                          class="img-fluid"></a> &nbsp &nbsp &nbsp
                    <h1 class="logo"><a href="{{ route('user.dashboard') }}">TeamUp</a></h1>
                </div>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                        <li class="dropdown"><a class="scrollto" href="{{url('user/dashboard#portfolio')}}">
                                <span>Clubs</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                @foreach ($clubs as $key => $c)
                                    @if($key <= 6)
                                        <li><a href="{{route('club.view',$c->id)}}">{{$c->name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        <!-- Avatar -->
                        <div class="dropdown">
                            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                               id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown"
                               aria-expanded="false">
                                <img
                                    src="{{ Auth::user()->profile_photo != null ? asset(Auth::user()->profile_photo) : 'https://mdbcdn.b-cdn.net/img/new/avatars/2.webp'}}"
                                    class="rounded-circle" height="25" alt="Black and White Portrait of a Man"
                                    loading="lazy"/>
                            </a>
                            <ul>
                                <li>
                                    <a class="nav-link scrollto @if (url()->current() == route('user.profile')) active @endif"
                                       href="{{ route('user.profile') }}">Profile</a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <li>
                            <div class="d-flex f-md-none py-2 ps-3 text-primary" style="font-size: 20px">
                                chat
                                <a class="ps-1" href="{{ url('chatify') }}">
                                    <i class="fa-duotone fa-comment-dots" style="font-size: 25px"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
            </div>
        </div>

    </div>
</header><!-- End Header -->
<main id="main">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show m-0" style="top: 80px; z-index: 3"
             role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show m-0" style="top: 80px; z-index: 3"
             role="alert">
            <strong>{{ session('error') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show m-0" style="top: 80px; z-index: 3"
             role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @yield('content')
</main><!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-between flex-md-row flex-column">
                    <div
                        class="col-lg-2 col-md-4 footer-logo d-flex align-items-center justify-content-center pb-5 me-md-5">
                        <a href="{{route('dashboard')}}"><img src="{{ asset('logos/teamup-logo-new.png') }}" alt="logo"
                                                              style="width:300px;"
                                                              class="img-fluid"></a>
                    </div>

                    <div class="col-lg-3 col-md-9 footer-info">
                        <h3>Teamup</h3>
                        <p>We are pleased to welcome you to the University club management system. We have an excellent
                            reputation for creating
                            innovative entrepreneurs. We aim to give every student in our care the best possible
                            education to prepare them for
                            life beyond University. Through this system, you can view any club of the University and
                            stay connected with us.</p>
                    </div>

                    <div class="col-lg-3 col-md-3 footer-links d-flex flex-column">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Clubs</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            105 Passara Road,<br>
                            Badulla,<br>
                            Sri Lanka. <br>
                            <strong>Phone:</strong> +94 335672910<br>
                            <strong>Email:</strong> teamup@info.com <br>
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
