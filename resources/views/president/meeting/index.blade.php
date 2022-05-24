@extends('layouts.president')
@section('title', 'Meetings')
@section('content')
    <div class="card card-default">
        <div class="card-header d-flex  justify-content-md-between justify-content-center p-4"
             style="background-color: #4c84ff !important">
            <div class="text-leftt text-white pb-1 pb-md-0">
                <h1>Meetings</h1>
            </div>
            <div class="text-right">
                <a href="{{route('president.meeting.create')}}">
                    <button type="button" class="btn btn-success"><i
                            class="fa-light fa-plus"></i> Create An Event
                    </button>
                </a>
                <button type="button" class="btn btn-secondary">Back</button>
            </div>
        </div>
        @if (!$meetings->isEmpty())
            <div class="container-fluid mb-3" style="min-height: 61vh">
                <div class="row">
                    @foreach($meetings as $meeting)
                        <div class="col-lg-12 mt-3">
                            <div class="card shadow-sm p-2 bg-white rounded">
                                <div class="card-body p-0 p-2">
                                    <div style="min-height: 5vh" class="d-lg-flex justify-content-between">
                                        <div>
                                            <h5 class="card-title text-primary">{{$meeting->title}}</h5>
                                            <div class="d-lg-flex">
                                                <div class="d-flex">
                                                    <b class="card-text pr-2">Meeting Link</b>
                                                    <a class="card-text"
                                                       href="{{$meeting->link}}">Join <i
                                                            class="fa-duotone fa-link"></i></a>
                                                </div>
                                                <div class="d-flex">
                                                    <b class="card-text pr-2 pl-lg-4">Meeting ID :</b>
                                                    <p class="card-text">{{$meeting->meeting_id}}</p>
                                                </div>
                                                <div class="d-flex">
                                                    <b class="card-text pr-2 pl-lg-4">Meeting Password :</b>
                                                    <p class="card-text">{{$meeting->meeting_password}}@+</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column py-1">
                                                <div class="d-flex flex-row px-1 align-items-center">
                                                    <i class="fa-duotone fa-calendar-day"></i>
                                                    <p class="card-text pl-2"> {{$meeting->date}}</p>
                                                </div>
                                                <div class="d-flex flex-row px-1 align-items-center">
                                                    <i class="fa-duotone fa-clock"></i>
                                                    <p class="card-text pl-2"> {{$meeting->time}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end">
                                            <div class="text-right d-flex justify-content-end position-inherit">
                                                <a href="{{route('president.meeting.publish', $meeting->id)}}"
                                                   class="pl-1">
                                                    <button type="button" class="btn btn-success"><i
                                                            class="fa-duotone fa-paper-plane-top mr-1"></i>Publish
                                                    </button>
                                                </a>
                                                <a href="{{route('president.meeting.edit', $meeting->id)}}"
                                                   class="pl-1">
                                                    <button type="button" class="btn btn-dark"><i
                                                            class="fa-duotone fa-pen-circle mr-1"></i>Edit
                                                    </button>
                                                </a>
                                                <a href="#deleteModal" data-toggle="modal" class="pl-1">
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fa-duotone fa-circle-trash mr-1"></i>Delete
                                                    </button>
                                                </a>
                                                <!-- Confirm Deletion Modal -->
                                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                                     aria-labelledby="deleteModalCenterTitle"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content text-center">
                                                            <div class="modal-body">
                                                                <i class="fa-thin fa-circle-xmark fa-10x text-danger"></i>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <div class="m-2">
                                                                    <h2>Are you sure?</h2>
                                                                    <p>Do you really want to delete these records? This
                                                                        process cannot be undone.</p>
                                                                </div>
                                                                <div
                                                                    class="modal-footer border-0 justify-content-center">
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Cancel
                                                                    </button>
                                                                    <form method="POST"
                                                                          action="{{route('president.meeting.destroy', $meeting->id)}}">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{ $meetings->links('components.pagination') }}
    </div>
    @else
        <div class="d-flex justify-content-center flex-column align-items-center p-5" style="height: 61vh">
            <h1 class="text-center">
                {{ __('Create a Meeting') }}</h1>
            <a href="{{ route('president.meeting.create') }}"><i class="fa-solid fa-folder-plus fa-10x m-5"></i></a>
        </div>
    @endif
@endsection

