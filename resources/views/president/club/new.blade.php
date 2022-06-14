@extends('layouts.president')
@section('title', 'new club')
@section('content')
    <div class="col-lg-12">
        <div class="text-right py-2">
            <a href="{{ route('president.club.index') }}" class="btn btn-secondary">Back</a>
        </div>

        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Create Your Club</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('president.club.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="president_id" value="{{ auth()->user()->id }}">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Club Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Club Name"
                            name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Club Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Club Description" rows="3"
                            name="description"></textarea><br>
                    </div>
                    <div class="form-group">
                        <label for="Club Category">Example select</label>
                        <select class="form-control" id="Club Category" name="category_name">
                            @foreach ($club_categories as $club_category)
                                <option value="{{ $club_category->category_name }}">{{ $club_category->category_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Goal of the Club</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Goals of Club" rows="3" name="vision"></textarea><br>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mission of the Club</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Mission of the Club" rows="3"
                            name="mission"></textarea>

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Club Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
