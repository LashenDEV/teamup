@extends('layouts.member')
@section('content')
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ $club->name }}</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('club.view', $club->id) }}">{{ $club->name }}</a></li>
                    <li>{{ $club->name }} Payment</li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Payment Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <card></card>
                        <card></card>
                        <card></card>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->
@endsection
