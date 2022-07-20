@extends('layouts.president')
@section('title', 'Create an Event')
@section('content')

    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header d-flex  justify-content-md-between justify-content-center p-4"
                 style="background-color: #4c84ff !important">
                <div class="text-leftt text-white pb-1 pb-md-0">
                    <h1>Edit the Event</h1>
                </div>
                <div class="text-right">
                    <a href="{{url()->previous() == 'https://teamup.test/president/dashboard' ? route('president.dashboard') : url()->previous()}}">
                        <button type="button" class="btn btn-secondary">Back</button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('president.event.update', $event->id) }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Event Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                               placeholder="Enter Event Name" name="name" value="{{ $event->name }}">
                        <input type="hidden" name="president_id" value="{{ auth()->user()->id }}">
                        <input type="hidden" name="club_id" value="{{\App\Models\Clubs::where('president_id', auth()->user()->id)->first()->id}}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description"
                                  placeholder="Enter the Description"
                                  name="description"
                                  rows="3">{{ $event->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="date">Date</label>
                        <p><input type="date" class="form-control" id="date" name="date" value="{{ $event->date }}"></p>
                    </div>

                    <div class="form-group">
                        <label for="time">Time</label>
                        <p><input type="time" class="form-control" id="time" name="time" value="{{ $event->time }}"></p>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Venue</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                               placeholder="Enter location"
                               name="venue" value="{{ $event->venue }}">
                    </div>

                    <div class="form-group">
                        <div class="mb-3">
                            <img src="{{ asset($event->image) }}" class="w-50" alt="">
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
    </div>
@endsection
@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
