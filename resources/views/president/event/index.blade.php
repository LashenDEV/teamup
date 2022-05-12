@extends('layouts.president')
@section('title', 'Events')
@section('content')
        <div class="card card-default">
            <div class="card-header d-flex  justify-content-between p-4" style="background-color: #4c84ff !important">
                <div class="text-leftt text-white">
                    <h1>All Events</h1>
                </div>
                <div class="text-right">
                    <a href="{{ route('president.event.create') }}"><button type="button" class="btn btn-success"><i
                                class="fa-light fa-plus"></i> Create An Event </button>
                    </a>
                    <button type="button" class="btn btn-secondary">Back</button>
                </div>
            </div>
            @if (!$events->isEmpty())
            <div class="container-fluid mb-3">
                <div class="row">
                    @foreach ($events as $event)
                        <div class="col-lg-4 mt-3">
                            <div class="card shadow-sm p-2 bg-white rounded">
                                <img class="card-img-top" src="{{ asset($event->image) }}" height="200px"
                                    width="auto !important" alt="Card image cap">
                                <div class="card-body p-0 p-2">
                                    <h5 class="card-title text-primary">{{ $event->name }}</h5>
                                    <p class="card-text">{{ $event->description }}</p>
                                    <div class="d-flex flex-column">
                                        <div class="d-flex flex-row p-1 align-items-center">
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
                                    <div class="text-right d-flex justify-content-end">
                                        <a href="#" class="pl-1">
                                            <button type="button" class="btn btn-success"><i
                                                    class="fa-duotone fa-paper-plane-top mr-1"></i>Publish</button>
                                        </a>
                                        <a href="{{ route('president.event.edit', $event->id) }}" class="pl-1">
                                            <button type="button" class="btn btn-info"><i
                                                    class="fa-duotone fa-pen-circle mr-1"></i>Edit</button>
                                        </a>
                                        <form action="{{ route('president.event.destroy', $event->id) }}" method="POST"
                                            class="pl-1">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fa-duotone fa-circle-trash mr-1"></i>Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <div class="d-flex justify-content-center flex-column align-items-center p-5" style="height: 61vh">
            <h1 class="text-center">
                {{ __('Create an Event') }}</h1>
            <a href="{{ route('president.event.create') }}"><i class="fa-solid fa-folder-plus fa-10x m-5"></i></a>
        </div>
    @endif
@endsection
