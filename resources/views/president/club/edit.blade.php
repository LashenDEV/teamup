@extends('layouts.president')
@section('title', 'edit club')
@section('content')
    <div class="col-lg-12">
        <div class="text-right py-2">
            <a href={{url()->previous() == 'https://teamup.test/president/dashboard' ? route('president.dashboard') : url()->previous()}}>
                <button type="button" class="btn btn-secondary">Back</button>
            </a>
        </div>

        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Edit Your Club</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('president.club.update', $your_club->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="president_id" value="{{ auth()->user()->id }}">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Club Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Club Name"
                            name="name" value="{{ $your_club->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Club Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Club Description" rows="3"
                            name="description">{{ $your_club->description }}</textarea><br>
                    </div>
                    <div class="form-group">
                        <label for="Club Category">Example select</label>
                        <select class="form-control" id="Club Category" name="category_name">
                            <option selected value="{{ $your_club->category_name }}">
                                {{ $your_club->category_name }}
                            </option>
                            @foreach ($club_categories as $club_category)
                                @if ($club_category->category_name != $your_club->category_name)
                                    <option value="{{ $club_category->category_name }}">
                                        {{ $club_category->category_name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Goal of the Club</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Goals of Club" rows="3" name="vision">{{ $your_club->vision }}</textarea><br>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mission of the Club</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Mission of the Club" rows="3"
                            name="mission">{{ $your_club->mission }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <img src="{{ asset($your_club->image) }}" class="w-50">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Change Your Club Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                        <input type="hidden" class="form-control-file" id="exampleFormControlFile1" name="old_image"
                            value="{{ $your_club->image }}">
                    </div>
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Update</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
