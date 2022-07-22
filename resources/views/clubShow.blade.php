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
                @if($registerd_user==null)
                    <div class="d-flex justify-content-center my-5">
                        <a href="{{route('user.club.register', $club->id)}}">
                            <button class="btn btn-danger">Join Club</button>
                        </a>
                    </div>
                @endif
            </div>
            @if($registerd_user!=null)
                <div class="col-md-12 pt-3">
                    @if($club->notices->isNotEmpty())
                        <h2><b>Notices</b></h2>
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($club->notices as $key => $notice)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                                         style="height: 400px; background-color: #f8f4ee">
                                        <div
                                            class="card-img-overlay d-flex justify-content-center align-items-center flex-column">
                                            <p class="px-5 text-justify">
                                                {{$notice->notice}}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleCaptions"
                                    data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @else
                        <div class="col-lg-12">
                            <div class="portfolio-info p-4" data-aos="zoom-in">
                                <h2 class="text-center d-flex justify-content-center align-items-center m-0"><i
                                        class="fa-solid fa-hexagon-exclamation fa-2x pe-3"></i>No Notices</h2>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-12 p-3 mt-3">
                    @if($next_meeting != null)
                        <div class="row" data-aos="zoom-in">
                            <div class="d-flex justify-content-between pb-3">
                            <span style="text-align:left;">
                                <b>Next Meeting</b>
                                <i class="fa-solid fa-circle fa-beat ps-2" style="color: #FF0000;"></i>
                            </span>
                                <a href="{{ route('user.upcoming-meetings.all', $club->id) }}"><span
                                        style=" text-align:right;">UpComming Meeting <i
                                            class="fa-solid fa-angles-right fa-beat ps-2"></i></span></a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="portfolio-info p-4" data-aos="zoom-in">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="d-md-flex d-block justify-content-between align-items-center">
                                            <h3 class="pb-0 mb-0 border-0"><i class="fa-duotone fa-video pe-2"></i>
                                                {{$next_meeting->title}}<br></h3>
                                            <span
                                                class="text-secondary"><i
                                                    class="fa-duotone fa-clock pe-2"></i>{{$next_meeting->time}} <br><i
                                                    class="fa-duotone fa-calendar-day pe-2"></i>{{$next_meeting->date}}</span>
                                            <div class="d-flex flex-column">
                                                <div class="d-flex">
                                                    <div style="width: 200px"><b>Meeting ID :</b></div>
                                                    <div>{{$next_meeting->meeting_id}}</div>
                                                </div>
                                                <div class="d-flex">
                                                    <div style="width: 200px"><b>Meeting Passcode :</b></div>
                                                    <div>{{$next_meeting->meeting_password}}</div>
                                                </div>
                                            </div>
                                            <a href="{{$next_meeting->meeting_link}}" class="mt-md-0 mt-2"><i
                                                    class="fa-solid fa-link pe-2"></i>Join
                                                Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-12">
                            <div class="portfolio-info p-4" data-aos="zoom-in">
                                <h2 class="text-center d-flex justify-content-center align-items-center m-0"><i
                                        class="fa-solid fa-hexagon-exclamation fa-2x pe-3"></i>No meetings</h2>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-12 p-3 mt-3">
                    @if($events->isNotEmpty())
                        <div class="portfolio-info p-4" data-aos="zoom-in">
                            <div class="col-md-12">
                                <div class="row">
                                    @foreach($events as $event)
                                        <div class="col-md-6">
                                            <div class="card shadow-sm p-2 bg-white rounded">
                                                <div style="width: 100%; height: 300px">
                                                    <img class="card-img-top"
                                                         src="{{asset($event->image)}}"
                                                         style="width: 100%; height: 100%; object-fit: cover"
                                                         alt="{{$event->name}}">
                                                </div>
                                                <div class="card-body p-0 p-2" style="min-height: 70vh">
                                                    <br>
                                                    <h3 class="card-title text-primary">{{ $event->name }}</h3>
                                                    <p class="card-text">{!! $event->description !!}</p>
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex flex-row p-1 align-items-center">
                                                            <i class="fa-duotone fa-calendar-day"></i>
                                                            <p class="card-text pe-2">{{ $event->date }}</p>
                                                        </div>
                                                        <div class="d-flex flex-row p-1 align-items-center">
                                                            <i class="fa-duotone fa-clock"></i>
                                                            <p class="card-text pe-2">{{ $event->time }}</p>
                                                        </div>
                                                        <div class="d-flex flex-row p-1 align-items-center">
                                                            <i class="fa-duotone fa-circle-location-arrow"></i>
                                                            <p class="card-text pe-2">{{ $event->venue }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            {{ $events->links('components.pagination') }}
                        </div>
                    @else
                        <div class="col-lg-12">
                            <div class="portfolio-info p-4" data-aos="zoom-in">
                                <h2 class="text-center d-flex justify-content-center align-items-center m-0"><i
                                        class="fa-solid fa-hexagon-exclamation fa-2x pe-3"></i>No Events</h2>
                            </div>
                        </div>
                    @endif
                </div>
            @endif
            <div class="col-lg-12 py-5">
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
                    <div class="portfolio-info h-100 py-4" data-aos="fade-up">
                        <h3>Committee Members</h3>
                        <div class="text-center">
                            <ul class="d-flex justify-content-center">
                                <li class="m-1"><img src="https://www.w3schools.com/howto/img_avatar.png"
                                                     width="100px" style="border-radius: 58%"
                                                     class="border border-primary border-5"
                                                     alt=""><br><br><strong>President</strong><br> {{ $club->clubOwner->name }}
                                </li>
                                <li class="m-1"><img src="https://www.w3schools.com/howto/img_avatar.png"
                                                     width="100px" style="border-radius: 58%"
                                                     class="border border-primary border-5"
                                                     alt=""><br><br><strong>Secretary</strong><br> {{ $club->clubOwner->name }}
                                </li>
                                <li class="m-1"><img src="https://www.w3schools.com/howto/img_avatar.png"
                                                     width="100px" style="border-radius: 58%"
                                                     class="border border-primary border-5"
                                                     alt=""><br><br><strong>Treasurer</strong><br> {{ $club->clubOwner->name }}
                                </li>
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
        </div>
    </section><!-- End Portfolio Details Section -->
@endsection
