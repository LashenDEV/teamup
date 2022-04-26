@extends('layouts.president')
@section('title', 'club')
@section('content')
    <!-- Button -->
    <div class="text-right">
        @if ($your_club == null)
            <a href="{{ route('president.new.club') }}" class="btn btn-primary item-center">
                <i class="fa-solid fa-plus"></i>
                Add Your Club</a>
        @else
            <a href="{{ route('president.edit.club') }}" class="btn btn-primary item-center">
                <i class="fa-solid fa-pen-to-square"></i>
                Edit Your Club</a>
        @endif
        <a href="{{ route('president.dashboard') }}" class="btn btn-secondary">Back</a>
    </div><br>
    <!-- Button -->

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    

    <!-- Background image -->
    <div class="bg-image mb-5 bg-white">
        <h1 class="text-center text-dark py-2">{{ $your_club->name }}</h1>
        <img src="{{ asset($your_club->image) }}" alt="" class="img-fluid"
            style="height: 500px; width:100% !important;">
    </div>
    <!-- Background image -->

    <!-- Card -->
    <div class="card-deck">
        <div class="card">
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/images/Icons/Clubs/description.png') }}" class="m-2 p-2" alt="..."
                    width="60px" height="60px">
                <h5 class="text-dark">Description:</h5>
            </div>
            <div class="card-body pt-0">
                <p class="card-text">{{ $your_club->description }}</p>
            </div>
        </div>
        <div class="card">
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/images/Icons/Clubs/vision.png') }}" class="m-2 p-2" alt="..."
                    width="60px" height="60px">
                <h5 class="text-dark">Goals of the Club:</h5>
            </div>
            <div class="card-body pt-0">
                <p class="card-text">{{ $your_club->vision }}</p>
            </div>
        </div>
        <div class="card">
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/images/Icons/Clubs/mission.png') }}" class="m-2 p-2" alt="..."
                    width="60px" height="60px">
                <h5 class="text-dark">Mission of the Club:</h5>
            </div>
            <div class="card-body pt-0">
                <p class="card-text">{{ $your_club->mission }}</p>
            </div>
        </div>
    </div>
    <!-- card -->
@endsection
