@extends('layouts.president')
@section('title', 'club')
@section('content')
    <div class="content">
        <!-- Button -->
        <div class="text-right py-2">
            @if ($your_club != null)
                <a href="{{ route('president.club.edit', $your_club->id) }}" class="btn btn-primary item-center">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Edit Your Club</a>
                <a href="#deleteModal" class="trigger-btn btn btn-danger item-center" data-toggle="modal"
                    class="btn btn-danger item-center">
                    <i class="fa-solid fa-trash-can"></i>
                    Delete</a>
            @endif
            <a href="{{ route('president.dashboard') }}" class="btn btn-secondary">Back</a>
        </div>
        <!-- Button -->

        @if ($your_club != null)
            <!-- Background image -->
            <div class="bg-image mb-5" style="background-color: #fff">
                <h1 class="text-center text-dark py-2">{{ $your_club->name }}</h1>
                <img src="{{ asset($your_club->image) }}" alt="" class="img-fluid"
                    style="height: 500px; width:100% !important;">
            </div>
            <!-- Background image -->

            <!-- Card -->
            <div class="card-deck">
                <div class="card">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/images/Icons/Clubs/description.png') }}" class="m-2 p-2"
                            alt="..." width="60px" height="60px">
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
            @include('components.deleteModal')
        @else
            <div class="d-flex justify-content-center flex-column align-items-center p-5" style="height: 61vh">
                <h1 class="text-center">
                    {{ __('Please Add Your Club') }}</h1>
                <a href="{{ route('president.club.create') }}"><i class="fa-solid fa-folder-plus fa-10x m-5"></i></a>
            </div>
        @endif
    </div>
@endsection
