@extends('layouts.president')
@section('title', 'Create an Event')
@section('content')

    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header d-flex  justify-content-between p-4" style="background-color: #4c84ff !important">
                <div class="text-leftt text-white">
                    <h1>Edit the Event</h1>
                </div>
                <div class="text-right">
                    <a href="{{ route('president.event.index') }}">
                        <button type="button" class="btn btn-secondary">Back</button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('president.event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Event Name</label>
                        <input type="name" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Event Name" name="name" value="{{ $event->name }}">
                        <input type="hidden" name="president_id" value="{{ auth()->user()->id }}">

                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Discription</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"  placeholder="Enter the Description" name="description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="enter date">Date</label>
                        <p><input type="date" class="form-control" id="date" name="date" value="{{ $event->date }}"></p>
                    </div>

                    <div class="form-group">
                        <label for="appt">Time</label>
                        <p><input type="time" class="form-control" id="time" name="time" value="{{ $event->time }}"></p>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Venue</label>
                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter location"
                    name="venue" value="{{ $event->venue }}">
            </div>

            <div class="form-group">
                <div class="mb-3">
                    <img src="{{ asset($event->image) }}" class="w-50">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Change Your Club Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                <input type="hidden" class="form-control-file" id="exampleFormControlFile1" name="old_image"
                    value="{{ $event->image }}">
            </div>

            <div class="form-footer pt-4 pt-5 mt-4 border-top">
                <button type="submit" class="btn btn-primary btn-default">Update</button>
            </div>
            </form>
        </div>
    </div>

@endsection
