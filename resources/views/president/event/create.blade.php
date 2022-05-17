@extends('layouts.president')
@section('title', 'Create an Event')
@section('content')

    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header d-flex  justify-content-md-between justify-content-center p-4" style="background-color: #4c84ff !important">
                <div class="text-leftt text-white pb-1 pb-md-0">
                    <h1>Create an Event</h1>
                </div>
                <div class="text-right">
                    <a href="{{ route('president.event.index') }}"><button type="button" class="btn btn-secondary">Back</button></a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('president.event.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Event Name</label>
                        <input type="name" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter Event Name" name="name">
                        <input type="hidden" name="president_id" value="{{ auth()->user()->id }}">

                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Discription</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1"  placeholder="Enter the Description" name="description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="enter date">Date</label>
                        <p><input type="date" class="form-control" id="date" name="date"></p>
                    </div>

                    <div class="form-group">
                        <label for="appt">Time</label>
                        <p><input type="time" class="form-control" id="time" name="time"></p>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Venue</label>
                        <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter location"
                            name="venue">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Create</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
