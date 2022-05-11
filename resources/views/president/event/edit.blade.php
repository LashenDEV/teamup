@extends('layouts.president')
@section('title', 'Create an Event')
@section('content')

<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header d-flex  justify-content-between p-3" style="background-color: #c3d4fa !important">
            <div class="text-leftt py-2">
                <h1>Create An Event</h1>
            </div>
            <div class="text-right py-2">
                <button type="button" class="btn btn-secondary">Back</button>
                <div class="input-group pt-1">
                </div>
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
                    <label for="exampleFormControlInput1">Description</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1"
                        placeholder="Enter the Description" name="description">
                </div>

                <div class="form-group">
                        <label for="enter date">Date</label>
                        <p><input type="date" class="form-control" id="date" name="date"></p>
                </div>

                <div class="form-group">
                        <label for="appt">Time</label>
                        <p><input type="time" class="form-control" id="time" name="time"></p>
                      </form>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Venue</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1"
                        placeholder="Enter location" name="venue">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Image</label>
                    <input type="file" class="form-control-file" id="image">
                </div>

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    <button type="cancel" class="btn btn-secondary btn-default">Cancel</button>
                </div>
            </form>
        </div>
    </div>

@endsection