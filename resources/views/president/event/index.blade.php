@extends('layouts.president')
@section('title', 'Events')
@section('content')
    <div class="card card-default">
        <div class="card-header d-flex  justify-content-md-between justify-content-center p-4"
             style="background-color: #4c84ff !important">
            <div class="text-leftt text-white pb-1 pb-md-0">
                <h1>All Events</h1>
            </div>
            <div class="text-right">
                <a href="{{ route('president.event.create') }}">
                    <button type="button" class="btn btn-success"><i
                            class="fa-light fa-plus"></i> Create An Event
                    </button>
                </a>
                <a href="{{route('president.dashboard')}}">
                    <button type="button" class="btn btn-secondary">Back</button>
                </a>
            </div>
        </div>
        @if (!$events->isEmpty())
            <div class="container-fluid mb-3">
                <div class="row">
                    @foreach ($events as $event)
                        <div class="col-lg-4 mt-3">
                            <div class="card shadow-sm p-2 bg-white rounded">
                                <div class="d-flex justify-content-end">
                                    @if($event->status == 1)
                                        <label class="bg-success p-2 text-white">Published</label>
                                    @else
                                        <label class="bg-warning p-2">Drafted</label>
                                    @endif
                                </div>
                                <div style="width: 100%; height: 300px">
                                    <img class="card-img-top"
                                         src="{{asset($event->image)}}"
                                         style="width: 100%; height: 100%; object-fit: cover"
                                         alt="{{$event->name}}">
                                </div>
                                <div class="card-body p-0 p-2">
                                    <div style="min-height: 70vh">
                                        <br>
                                        <h3 class="card-title text-primary">{{ $event->name }}</h3>
                                        <p class="card-text">{!! $event->description !!}</p>
                                        <div class="d-flex flex-column">
                                            <div class="d-flex flex-row pt-5 p-1 align-items-center">
                                                <i class="fa-duotone fa-calendar-day"></i>
                                                <p class="card-text pl-2">{{ $event->date }}</p>
                                            </div>
                                            <div class="d-flex flex-row p-1 align-items-center">
                                                <i class="fa-duotone fa-clock"></i>
                                                <p class="card-text pl-2">{{ $event->time }}</p>
                                            </div>
                                            <div class="d-flex flex-row p-1 align-items-center">
                                                <i class="fa-duotone fa-circle-location-arrow"></i>
                                                <p class="card-text pl-2">{{ $event->venue }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right d-flex justify-content-end position-inherit">
                                        @if($event->status == 0)
                                            <a href="{{route('president.event.publish', $event->id)}}" class="pl-1">
                                                <button type="button" class="btn btn-success"><i
                                                        class="fa-duotone fa-paper-plane-top mr-1"></i>Publish
                                                </button>
                                            </a>
                                        @else
                                            <a href="{{route('president.event.draft', $event->id)}}" class="pl-1">
                                                <button type="button" class="btn btn-warning text-dark"><i
                                                        class="fa-duotone fa-paper-plane-top mr-1"></i>Draft
                                                </button>
                                            </a>
                                        @endif
                                        <a href="{{ route('president.event.edit', $event->id) }}" class="pl-1">
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
                                                            <p>Do you really want to delete these records? This process
                                                                cannot be undone.</p>
                                                        </div>
                                                        <div class="modal-footer border-0 justify-content-center">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cancel
                                                            </button>
                                                            <form method="POST"
                                                                  action="{{ route('president.event.destroy', $event->id) }}">
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
                    @endforeach
                </div>
            </div>
            {{ $events->links('components.pagination') }}
    </div>
    @else
        <div class="d-flex justify-content-center flex-column align-items-center p-5" style="height: 61vh">
            <h1 class="text-center">
                {{ __('Create an Event') }}</h1>
            <a href="{{ route('president.event.create') }}"><i class="fa-solid fa-folder-plus fa-10x m-5"></i></a>
        </div>
    @endif
@endsection
