@extends('layouts.president')
@section('title', 'club')
@section('content')
    {{-- //show the club here please remove this comment after done the job
//Add a href button as "Add Your Club" --}}
    <style>
        h1 {
            text-align: center;
        }

    </style>

    <!-- Button -->
    <div class="text-right">
        <button type="button" class="btn btn-primary item-center"><i class="fa-solid fa-plus"></i> Add Your Club</button>
        <button type="button" class="btn btn-secondary">Back</button>
    </div><br>
    <!-- Button -->

    <h1>ART CLUB</h1><br>

    <!-- Background image -->
    <div class="bg-image" style="
            height: 50vh;
          ">
        <img src="{{ asset('image/clubs/Art.jpeg') }}" alt="" class="img-fluid" > <span class="rounded"></span> 
        </div> 
    <!-- Background image -->

    <!-- Card -->
    <div class="card-deck">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Description:</h5>
                <p class="card-text">The Art Club is a place for practicing artists to hone in on their skills, develop
                    their techniques and portfolios, collaborate with other artists like themselves, create bonds with the
                    community through the arts, and learn how to work together through group projects that will beautify the
                    university and community.</p>
            </div>
        </div>
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Goals of Club:</h5>
                <p class="card-text">To provide students with a safe environment to explore the visual arts; To create
                    experiences that are not provided in a regular classroom environment for art students; To enhance
                    connections to the arts between our students and the community at large.</p>
            </div>
        </div>
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Mission:</h5>
                <p class="card-text">Our mission is to provide art club members with an opportunity to express their
                    individuality through the creation of artworks and give back to our community, school, and others, using
                    our talents and gifts in unique ways.</p>
            </div>
        </div>
    </div> <br>
    <!-- card -->

   
@endsection
