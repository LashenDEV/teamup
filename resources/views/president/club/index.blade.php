@extends('layouts.president')
@section('title', 'club')
@section('content')
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
        <a href="{{ url()->previous() }}">
            <button type="button" class="btn btn-secondary">Back</button>
        </a>
    </div>
    @if ($your_club != null)
        <!-- Button -->
        <div class="card card-deafault rounded">
            <div class="card body">
                <!-- Background image -->
                <div class="bg-image mb-5 d-flex align-items-center flex-column" style="background-color: #fff">
                    <div class="d-flex flex-column w-100 align-items-end">
                        @if($your_club->approval == 1)
                            <span class="badge badge-success">Approved</span>
                        @elseif($your_club->approval == null)
                            <span class="badge badge-warning text-dark">Pending</span>
                        @else
                            <span class="badge badge-danger">Rejected</span>
                        @endif
                    </div>
                    <h1 class="text-dark py-4">{{ $your_club->name }}</h1>
                    @if($your_club->image != null)
                        <div style="height: 500px; width:95% !important;">
                            <img src="{{ asset($your_club->image) }}" alt="" class="img-fluid"
                                 style="height: 100%; width: 100%; object-fit: cover">
                        </div>
                    @else
                        <div class="d-flex justify-content-center flex-column align-items-center p-5">
                            <h1 class="text-center">{{ __('Please Add a Club Image') }}</h1>
                            <i class="fa-duotone fa-face-frown fa-10x m-5"></i>
                        </div>
                    @endif
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
                <!-- Confirm Deletion Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                     aria-labelledby="deleteModalCenterTitle"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content text-center">
                            <div class="modal-body">
                                <i class="fa-thin fa-circle-xmark fa-10x text-danger"></i>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="m-2">
                                    <h2>Are you sure?</h2>
                                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                                </div>
                                <div class="modal-footer border-0 justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <form method="POST" action="{{ route('president.club.destroy', $your_club->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fa-solid fa-trash-can"></i>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Confirm Deletion Model -->
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
