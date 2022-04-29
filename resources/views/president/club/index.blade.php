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
            <a href="{{ route('president.edit.club') }}" class="btn btn-danger item-center" >
                <i class="fa-solid fa-trash-can"></i>
                Delete</a>
        @endif
        <a href="{{ route('president.dashboard') }}" class="btn btn-secondary">Back</a>
    </div><br>
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
    @if ($your_club != null)
        <!-- Button -->
        <div class="card card-deafault rounded">
            <div class="card body">
                <!-- Background image -->
                <div class="bg-image mb-5 d-flex align-items-center flex-column" style="background-color: #fff">
                    <h1 class="text-dark py-4">{{ $your_club->name }}</h1>
                    <img src="{{ asset($your_club->image) }}" alt="" class="img-fluid"
                        style="height: 500px; width:95% !important;">
                </div>
                <!-- Background image -->

                <!-- Card -->
                <div class="card-deck mx-4 mb-3 bg-white">
                    <div class="card shadow p-3 mb-5 rounded">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/Icons/Clubs/description.png') }}" class="m-2 p-2"
                                alt="..." width="60px" height="60px">
                            <h5 class="text-dark">Description:</h5>
                        </div>
                        <div class="card-body pt-0">
                            <p class="card-text">{{ $your_club->description }}</p>
                        </div>
                    </div>
                    <div class="card shadow p-3 mb-5 rounded">

                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/Icons/Clubs/vision.png') }}" class="m-2 p-2"
                                alt="..." width="60px" height="60px">
                            <h5 class="text-dark">Goals of the Club:</h5>
                        </div>
                        <div class="card-body pt-0">
                            <p class="card-text">{{ $your_club->vision }}</p>
                        </div>
                    </div>
                    <div class="card shadow p-3 mb-5 rounded">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/Icons/Clubs/mission.png') }}" class="m-2 p-2"
                                alt="..." width="60px" height="60px">
                            <h5 class="text-dark">Mission of the Club:</h5>
                        </div>
                        <div class="card-body pt-0">
                            <p class="card-text">{{ $your_club->mission }}</p>
                        </div>
                    </div>
                </div>
                <!-- card -->
                @include('components.deleteModal')
            </div>
        </div>
    @else
        <div class="d-flex justify-content-center flex-column align-items-center p-5" style="height: 61vh">
            <h1 class="text-center">
                {{ __('Please Add Your Club') }}</h1>
            <a href="{{ route('president.club.create') }}"><i class="fa-solid fa-folder-plus fa-10x m-5"></i></a>
        </div>
    @endif
@endsection
