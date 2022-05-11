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

        <div class="container-fluid mb-3">
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-sm-4 mt-3">
                        <div class="card shadow-sm p-3 bg-white rounded">
                            <img class="card-img-top" src="{{ asset($event->image) }}" alt="Card image cap">
                            <div class="card-body p-2 ">
                                <h5 class="card-title text-primary">{{ $event->name }}</h5>
                                <p class="card-text pb-3">{{ $event->description }}</p>
                                <p class="card-text pb-3">{{ $event->date }}</p>
                                <p class="card-text pb-3">{{ $event->time }}</p>
                                <p class="card-text pb-3">{{ $event->venue }}</p>
                                <div class="text-right py-2">
                                    <button type="button" class="btn btn-success">Publish</button>
                                    <button type="button" class="btn btn-info">Edit</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
