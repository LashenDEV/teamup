<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Teamup | @yield('title')</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('backend/assets/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/ladda/ladda.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('backend/assets/css/sleek.css') }}" />


    <!-- FAVICON -->
    <link href="{{ asset('logos/teamup fav-icon.png') }}" rel="shortcut icon" />

    <!-- Material Icons CDN -->
    <link rel="stylesheet"
        href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">

    {{-- Animate.style CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('backend/assets/plugins/nprogress/nprogress.js') }}"></script>
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed animate__animated animate__fadeIn" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">

        <!--
====================================
——— LEFT SIDEBAR WITH FOOTER
=====================================
-->
        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                <div class="app-brand">
                    <a href="/index.html" class="p-0">
                        <img class="brand-icon p-2" src="{{ asset('assets/images/logos/teamup logo.png') }}" alt=""
                            width="75px" height="75px">
                        <span class="brand-name ml-0">President Dashboard</span>
                    </a>
                </div>
                <!-- begin sidebar scrollbar -->
                <div class="sidebar-scrollbar">

                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">
                        <li
                            class="has-sub {{ (request()->routeIs('president.club*') or request()->routeIs('president.event*') or request()->routeIs('president.meeting*') or request()->routeIs('president.notice*') or request()->routeIs('president.dashboard')) ? 'active expand' : '' }}">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#clubs" aria-expanded="false" aria-controls="clubs">
                                <i class="mdi mdi-home-assistant"></i>
                                <span class="nav-text">Your Club</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse {{ (request()->routeIs('president.club*') or request()->routeIs('president.event*') or request()->routeIs('president.meeting*') or request()->routeIs('president.notice*') or request()->routeIs('president.dashboard')) ? 'show' : '' }}"
                                id="clubs" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li class="{{ request()->routeIs('president.club*') ? 'active' : '' }}">
                                        <a class="sidenav-item-link" href="{{ route('president.club.index') }}">
                                            <i class="fa-duotone fa-list-check mr-3"></i>
                                            <span class="nav-text">Manage Your Club</span>
                                        </a>
                                    </li>
                                    <li class="{{ request()->routeIs('president.event*') ? 'active' : '' }}">
                                        <a class="sidenav-item-link" href="{{ route('president.event.index') }}">
                                            <i class="fa-duotone fa-calendar-days mr-3">
                                            </i>
                                            <span class="nav-text">Events</span>
                                        </a>
                                    </li>
                                    <li class="{{ request()->routeIs('president.notice*') ? 'active' : '' }}">
                                        <a class="sidenav-item-link" href="{{ route('president.notice.index') }}">
                                            <i class="fa-duotone fa-notes mr-3"></i>
                                            <span class="nav-text">Notices</span>
                                        </a>
                                    </li>
                                    <li class="{{ request()->routeIs('president.meeting*') ? 'active' : '' }}">
                                        <a class="sidenav-item-link" href="{{ route('president.meeting.index') }}">
                                            <i class="fa-duotone fa-video mr-3"></i>
                                            <span class="nav-text">Meetings</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li class="has-sub {{ request()->routeIs('president.members*') ? 'active expand' : '' }}">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#members" aria-expanded="false" aria-controls="members">
                                <i class="mdi mdi-account-group"></i>
                                <span class="nav-text">Members</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse {{ request()->routeIs('president.members*') ? 'show' : '' }}"
                                id="members" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li class="{{ request()->routeIs('president.members*') ? 'active' : '' }}">
                                        <a class="sidenav-item-link" href="{{ route('president.members.index') }}">
                                            <i class="fa-duotone fa-people-roof mr-3"></i>
                                            <span class="nav-text">Manage Members</span>

                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="index.html">
                                            <i class="fa-duotone fa-money-check-dollar mr-3"></i>
                                            <span class="nav-text">Payments</span>

                                        </a>
                                    </li>
                                    {{-- <li class="active">
                                        <a class="sidenav-item-link" href="index.html">
                                            <span class="nav-text">Meetings</span>

                                        </a>
                                    </li>
                                    <li class="active">
                                        <a class="sidenav-item-link" href="#">
                                            <span class="nav-text">Members</span>

                                        </a>
                                    </li> --}}
                                </div>
                            </ul>
                        </li>


                        {{-- <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#pages" aria-expanded="false" aria-controls="pages">
                                <i class="mdi mdi-image-filter-none"></i>
                                <span class="nav-text">Pages</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="pages" data-parent="#sidebar-menu">
                                <div class="sub-menu">


                                    <li>
                                        <a class="sidenav-item-link" href="user-profile.html">
                                            <span class="nav-text">User Profile</span>

                                        </a>
                                    </li>


                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#authentication" aria-expanded="false"
                                            aria-controls="authentication">
                                            <span class="nav-text">Authentication</span> <b
                                                class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="authentication">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="sign-in.html">Sign In</a>
                                                </li>

                                                <li>
                                                    <a href="sign-up.html">Sign Up</a>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>


                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#others" aria-expanded="false" aria-controls="others">
                                            <span class="nav-text">Others</span> <b class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="others">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="invoice.html">invoice</a>
                                                </li>

                                                <li>
                                                    <a href="error.html">Error</a>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>


                                </div>
                            </ul>
                        </li>


                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#documentation" aria-expanded="false" aria-controls="documentation">
                                <i class="mdi mdi-book-open-page-variant"></i>
                                <span class="nav-text">Documentation</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="documentation" data-parent="#sidebar-menu">
                                <div class="sub-menu">


                                    <li class="section-title">
                                        Getting Started
                                    </li>


                                    <li>
                                        <a class="sidenav-item-link" href="introduction.html">
                                            <span class="nav-text">Introduction</span>

                                        </a>
                                    </li>


                                    <li>
                                        <a class="sidenav-item-link" href="setup.html">
                                            <span class="nav-text">Setup</span>

                                        </a>
                                    </li>


                                    <li>
                                        <a class="sidenav-item-link" href="customization.html">
                                            <span class="nav-text">Customization</span>

                                        </a>
                                    </li>


                                    <li class="section-title">
                                        Layouts
                                    </li>


                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#headers" aria-expanded="false" aria-controls="headers">
                                            <span class="nav-text">Layout Headers</span> <b
                                                class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="headers">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="header-fixed.html">Header Fixed</a>
                                                </li>

                                                <li>
                                                    <a href="header-static.html">Header Static</a>
                                                </li>

                                                <li>
                                                    <a href="header-light.html">Header Light</a>
                                                </li>

                                                <li>
                                                    <a href="header-dark.html">Header Dark</a>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>


                                    <li class="has-sub">
                                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                            data-target="#sidebar-navs" aria-expanded="false"
                                            aria-controls="sidebar-navs">
                                            <span class="nav-text">layout Sidebars</span> <b
                                                class="caret"></b>
                                        </a>
                                        <ul class="collapse" id="sidebar-navs">
                                            <div class="sub-menu">

                                                <li>
                                                    <a href="sidebar-open.html">Sidebar Open</a>
                                                </li>

                                                <li>
                                                    <a href="sidebar-minimized.html">Sidebar Minimized</a>
                                                </li>

                                                <li>
                                                    <a href="sidebar-offcanvas.html">Sidebar Offcanvas</a>
                                                </li>

                                                <li>
                                                    <a href="sidebar-with-footer.html">Sidebar With Footer</a>
                                                </li>

                                                <li>
                                                    <a href="sidebar-without-footer.html">Sidebar Without Footer</a>
                                                </li>

                                                <li>
                                                    <a href="right-sidebar.html">Right Sidebar</a>
                                                </li>

                                            </div>
                                        </ul>
                                    </li>


                                    <li>
                                        <a class="sidenav-item-link" href="rtl.html">
                                            <span class="nav-text">RTL Direction</span>

                                        </a>
                                    </li>


                                </div>
                            </ul>
                        </li> --}}


                    </ul>

                </div>

                <hr class="separator" />

            </div>
        </aside>

        <div class="page-wrapper">
            <!-- Header -->
            <header class="main-header " id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <!-- search form -->
                    <div class="search-form d-none d-lg-inline-block">
                        <div class="input-group">
                            <button type="button" name="search" id="search-btn" class="btn btn-flat">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <input type="text" name="query" id="search-input" class="form-control"
                                placeholder="Members" autofocus autocomplete="off" />
                        </div>
                        <div id="search-results-container">
                            <ul id="search-results"></ul>
                        </div>
                    </div>

                    <div class="navbar-right ">
                        <ul class="nav navbar-nav">
                            {{-- <!-- Github Link Button -->
                            <li class="github-link mr-3">
                                <a class="btn btn-outline-secondary btn-sm"
                                    href="https://github.com/tafcoder/sleek-dashboard" target="_blank">
                                    <span class="d-none d-md-inline-block mr-2">Source Code</span>
                                    <i class="mdi mdi-github-circle"></i>
                                </a>

                            </li> --}}
                            <li class="dropdown notifications-menu">
                                <button class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-bell-outline"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-header">You have 5 notifications</li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-plus"></i> New user registered
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 10 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-remove"></i> User deleted
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 07 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 12 PM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-account-supervisor"></i> New client
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 10 AM</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-server-network-off"></i> Server overloaded
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> 05 AM</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a class="text-center" href="#"> View All </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- user Account -->
                            <li class="dropdown user-menu">
                                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <img src="{{ asset('backend/assets/img/user/user.png') }}" class="user-image"
                                        alt="User Image" />
                                    <span class="d-none d-lg-inline-block">Abdus Salam</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <!-- user image -->
                                    <li class="dropdown-header">
                                        <img src="{{ asset('backend/assets/img/user/user.png') }}"
                                            class="img-circle" alt="User Image" />
                                        <div class="d-inline-block">
                                            Abdus Salam <small class="pt-1">abdus@gmail.com</small>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="profile.html">
                                            <i class="mdi mdi-account"></i> My Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.html">
                                            <i class="mdi mdi-email"></i> Message
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                                    </li>

                                    <li class="dropdown-footer">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>


            <div class="content-wrapper text-dark">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-warning alert-dismissible fade show m-0" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li><strong>{{ $error }}</strong></li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="content p-4">
                    @yield('content')
                </div>
            </div>

            <footer class="footer mt-auto">
                <div class="copyright bg-white">
                    <p>
                        &copy; <span id="copy-year">2022/span> Copyright Sleek Dashboard Bootstrap Template by
                            <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
                    </p>
                </div>
                <script>
                    var d = new Date();
                    var year = d.getFullYear();
                    document.getElementById("copy-year").innerHTML = year;
                </script>
            </footer>

        </div>
    </div>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
    <script src="{{ asset('backend/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/toaster/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/charts/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/ladda/spin.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/ladda/ladda.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jquery-mask-input/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/jekyll-search.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/sleek.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart.js') }}"></script>
    <script src="{{ asset('backend/assets/js/date-range.js') }}"></script>
    <script src="{{ asset('backend/assets/js/map.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>

    {{-- CKEditor --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/34.0.0/ckeditor.min.js"
        integrity="sha512-d1WD+hDYM2nEFaZBZdRBVXaTLrVb4Bno5hCBcrIZZ45hNKQWD7s9CllB6NqkgebX/qwMkbuWM804gfFr2cisqA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('scripts')
</body>

</html>
