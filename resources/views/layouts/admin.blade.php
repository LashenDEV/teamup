<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>@yield('title')</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
          rel="stylesheet"/>
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet"/>

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('backend/assets/plugins/toaster/toastr.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend /assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/ladda/ladda.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet"/>

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('backend/assets/css/sleek.css') }}"/>


    <!-- FAVICON -->
    <link href="{{ asset('logos/teamup fav-icon.png') }}" rel="shortcut icon"/>

    <!-- Material Icons CDN -->
    <link rel="stylesheet"
          href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">

    {{-- Animate.style CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
                <a href="{{route('dashboard')}}" class="p-0">
                    <img class="brand-icon p-2" src="{{ asset('assets/images/logos/teamup logo.png') }}"
                         alt="" width="75px" height="75px">
                    <span class="brand-name ml-0">Admin Dashboard</span>
                </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">
                    <li
                        class="has-sub {{ (request()->routeIs('admin.slider*') or request()->routeIs('admin.statement*') or request()->routeIs('admin.dashboard')) ? 'active expand' : '' }}">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                           data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                            <i class="fa-duotone fa-table-layout mr-3"></i>
                            <span class="nav-text">Site Layout</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse {{ (request()->routeIs('admin.slider*') or request()->routeIs('admin.statement*') or request()->routeIs('admin.dashboard')) ? 'show' : '' }}"
                            id="dashboard" data-parent="#sidebar-menu">
                            <div class="sub-menu">
                                <li class="{{ request()->routeIs('admin.slider*') ? 'active' : '' }}">
                                    <a class="sidenav-item-link" href="{{ route('admin.slider') }}">
                                        <i class="fa-solid fa-house-user mr-2"></i><span class="nav-text">Home
                                                Slider</span>
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('admin.statement*') ? 'active' : '' }}">
                                    <a class="sidenav-item-link" href="{{ route('admin.statement.index') }}">
                                        <i class="fa-solid fa-file-lines mr-2"></i>
                                        <span class="nav-text"> Statements</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a class="sidenav-item-link" href="#">
                                        <i class="fa-solid fa-file-signature mr-2"></i><span
                                            class="nav-text">Footer</span>
                                    </a>
                                </li>

                            </div>
                        </ul>
                    </li>
                    <li
                        class="has-sub  {{ (request()->routeIs('admin.president*') or request()->routeIs('admin.club*') or request()->routeIs('admin.category*')) ? 'active expand' : '' }}">
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                           data-target="#president" aria-expanded="false" aria-controls="president">
                            <i class="fa-duotone fa-person-chalkboard mr-3"></i>
                            <span class="nav-text">President</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse {{ (request()->routeIs('admin.president*') or request()->routeIs('admin.club*') or request()->routeIs('admin.category*')) ? 'show' : '' }}"
                            id="president" data-parent="#sidebar-menu">
                            <div class="sub-menu">
                                <li class="{{ request()->routeIs('admin.president*') ? 'active' : '' }}">
                                    <a class="sidenav-item-link" href="{{ route('admin.president.index') }}">
                                        <i class="fa-solid fa-user-tie-hair mr-2"></i>
                                        <span class="nav-text">Presidents</span>
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('admin.club*') ? 'active' : '' }}">
                                    <a class="sidenav-item-link" href="{{ route('admin.club.index') }}">
                                        <i class="fa-duotone fa-chalkboard-user mr-2"></i>
                                        <span class="nav-text">Clubs</span>
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('admin.category*') ? 'active' : '' }}">
                                    <a class="sidenav-item-link" href="{{ route('admin.category.index') }}">
                                        <i class="fa-solid fa-compress-wide mr-2"></i>
                                        <span class="nav-text">Clubs Categories</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a class="sidenav-item-link" href="#">
                                        <i class="fa-solid fa-file-signature mr-2"></i>
                                        <span class="nav-text">Footer</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>

                    <li class="has-sub {{ (request()->routeIs('admin.member*') or request()->routeIs('admin.payment*')) ? 'active expand' : '' }}">
                        <a class="              sidenav-item-link" href="javascript:void(0)"
                           data-toggle="collapse" data-target="#members" aria-expanded="false"
                           aria-controls="dashboard">
                            <i class="fa-duotone fa-people-group mr-3"></i>
                            <span class="nav-text">Members</span> <b class="caret"></b>
                        </a>
                        <ul class="collapse  {{ (request()->routeIs('admin.member*') or request()->routeIs('admin.payment*')) ? 'show' : '' }}"
                            id="members" data-parent="#sidebar-menu">
                            <div class="sub-menu">
                                <li class="{{ request()->routeIs('admin.member*') ? 'active' : '' }}">
                                    <a class="sidenav-item-link" href="{{ route('admin.member.index') }}">
                                        <i class="fa-solid fa-user-check mr-2"></i>
                                        <span class="nav-text">Members</span>
                                    </a>
                                </li>
                                <li class="{{ request()->routeIs('admin.payment*') ? 'active' : '' }}">
                                    <a class="sidenav-item-link" href="{{ route('admin.payment.index') }}">
                                        <i class="fa-duotone fa-circle-dollar mr-2"></i>
                                        <span class="nav-text">Payments</span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </li>
                    <li class="has-sub {{ request()->routeIs('admin.history-logs*') ? 'active' : '' }}">
                        <a class="sidenav-item-link" href="{{route('admin.history-logs.index')}}">
                            <i class="fa-duotone fa-clock-rotate-left"></i>
                            <span class="nav-text">History Logs</span>
                        </a>
                    </li>
                </ul>
            </div>

            <hr class="separator"/>

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
                        @if(request()->routeIs('admin.member.index') or (request()->routeIs('admin.president.index'))or (request()->routeIs('admin.club.index')))
                            <button type="button" name="search" id="search-btn" class="btn btn-flat">
                                <i class="mdi mdi-magnify"></i>
                            </button> @endif
                        <input type="search" name="query" id="search"
                               class="form-control" @if(request()->routeIs('admin.member.index') or (request()->routeIs('admin.president.index') or (request()->routeIs('admin.club.index'))))
                            '' @else disabled @endif
                        placeholder="@if(request()->routeIs('admin.member.index')) Search a
                        Member @elseif(request()->routeIs('admin.president.index')) Search a
                        President @elseif(request()->routeIs('admin.club.index')) Search a Club  @endif"
                        autofocus autocomplete="off"/>
                    </div>
                    <div id="search-results-container">
                        <ul id="search-results"></ul>
                    </div>
                </div>

                <div class="navbar-right ">
                    <ul class="nav navbar-nav">
                        <li class="dropdown notifications-menu">
                            <a class="p-0 m-0" href="{{ url('chatify') }}">
                                <button
                                    class="btn btn-outline-primary btn-rounded"><i
                                        class="fa-duotone fa-comment-dots fa-2x"></i></button>
                            </a>
                        </li>
                        <li class="dropdown notifications-menu">
                            <button class="dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                @php($notifications = \App\Models\Notifications::where('show_to_admin', 1)->where('status_to_admin', 0)->get())
                                <li class="dropdown-header">You have {{$notifications->count()}} notifications</li>
                                @foreach($notifications as $notification)
                                    <li>
                                        <a href="#">
                                            {!! $notification->icon !!}{{$notification->notification}}
                                            <span class=" font-size-12 d-inline-block float-right"><i
                                                    class="mdi mdi-clock-outline"></i> {{\Carbon\Carbon::parse($notification->created_at)->diffForHumans()}}</span>
                                        </a>
                                    </li>
                                @endforeach
                                @if($notifications->isNotEmpty())
                                    <li class="dropdown-footer">
                                        <a class="text-center" href="{{route('admin.notification.read-all')}}"> Mark as
                                            Read </a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                        <!-- user Account -->
                        <li class="dropdown user-menu">
                            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <img
                                    src="{{ Auth::user()->profile_photo != null ? asset(Auth::user()->profile_photo) : asset('assets/images/Icons/User/profile_pic.png') }}"
                                    class="user-image" alt="User Image"/>
                                <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <!-- user image -->
                                <li class="dropdown-header">
                                    <img
                                        src="{{ Auth::user()->profile_photo != null ? asset(Auth::user()->profile_photo) : asset('assets/images/Icons/User/profile_pic.png') }}"
                                        class="img-circle" alt="User Image"/>
                                    <div class="d-inline-block">
                                        {{ Auth::user()->name }} <small
                                            class="pt-1">{{ Auth::user()->email }}</small>
                                    </div>
                                </li>

                                <li>
                                    <a href="{{ route('admin.profile') }}">
                                        <i class="mdi mdi-account"></i> My Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('chatify') }}">
                                        <i class="mdi mdi-email"></i> Message
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show m-0" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show m-0" role="alert">
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

        <div class="content-wrapper text-dark">
            <div class="content p-0">
                @yield('content')
            </div>
        </div>

        <footer class="footer mt-auto">
            <div class="py-3 bg-white d-flex justify-content-center">
                <p>
                    Copyright &copy; <span id="copy-year">2022</span>
                    <a class="text-primary" href="http://www.teamtwelve.com/" target="_blank">#team12</a>
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
</body>

</html>
