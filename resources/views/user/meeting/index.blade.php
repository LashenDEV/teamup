@extends('layouts.member')
@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>All Upcoming Meetings <i class="fa-solid fa-bell fa-shake fa-sm"
                                             style="--fa-animation-duration: 3s; color: #FF0000;"></i></h2>
                <ol>
                    <li><a href="{{ route('dashboard') }}">Home</a></li>
                    <li><a href="{{ route('club.view', $club->id) }}">{{ $club->name }}</a></li>
                    <li>All Upcoming Meetings</li>
                </ol>
            </div>
        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container pb-5">
            <div class="row gy-4" data-aos="fade-up">
                @foreach($all_meetings as $key => $meeting)
                    <div class="col-lg-12 position-sticky">
                        @if($key == 0)
                            <div class="portfolio-info pt-0 ps-0">
                                <label class="bg-danger p-1 text-white" style="top: 0 !important;">Next Meeting</label>
                                @else
                                    <div class="portfolio-info ps-0">
                                        @endif
                                        <div class="col-md-12 ps-5">
                                            <div class="row">
                                                <div
                                                    class="d-md-flex d-block justify-content-between align-items-center">
                                                    <div>
                                                        <h3 class="pb-0 mb-0 border-0">
                                                            <i class="fa-duotone fa-video pe-2"></i> {{$meeting->title}}
                                                            <br></h3>
                                                    </div>
                                                    <span class="text-secondary"><i
                                                            class="fa-duotone fa-clock pe-2"></i>{{$meeting->time}}<br><i
                                                            class="fa-duotone fa-calendar-day pe-2"></i>{{$meeting->date}}</span>
                                                    <div class="d-flex flex-column">
                                                        <div class="d-flex">
                                                            <div style="width: 200px"><b>Meeting ID :</b></div>
                                                            <div>{{$meeting->meeting_id}}</div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div style="width: 200px"><b>Meeting Passcode :</b></div>
                                                            <div>{{$meeting->meeting_password}}</div>
                                                        </div>
                                                    </div>
                                                    <a href="{{$meeting->meeting_link}}" class="mt-md-0 mt-2"><i
                                                            class="fa-solid fa-link pe-2"></i>Join
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            @endforeach
                    </div>
            </div>
    </section>
@endsection
