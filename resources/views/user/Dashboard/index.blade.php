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

                @foreach ($home_sliders as $home_slider)
                <div class="carousel-item" style="background-image: url({{ asset($home_slider->image) }});">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">{{ $home_slider->name }}</h2>
                            <p class="animate__animated animate__fadeInUp">{{ $home_slider->description }}</p>
                            <a href="#featured-services" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
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
                    <li data-filter=".filter-app">Art Club</li>
                    <li data-filter=".filter-card">IEEE</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach($clubs as $club)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset($club->image)}}" class="img-fluid" alt="">
                            <a href="{{route('user.club.register', $club->id)}}" data-lightbox="portfolio"
                               data-title="App 1" class="link-preview"><i class="bi bi-plus"></i></a>
                            <a href="{{route('club.view', $club->id)}}" class="link-details"
                               title="More Details"><i
                                    class="bi bi-link"></i>
                            </a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a href="portfolio-details.html">{{$club->name}}</a></h4>
                            <p>{{$club->description}}</p>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
        </div>
        {{ $clubs->links('components.pagination') }}
    </div>
</section><!-- End Portfolio Section -->


@endsection
