@extends('layouts.admin')
@section('title', 'Create Statement')
@section('content')
    <div class="col-lg-12">
        <div class="text-right py-2">
            <a href="{{ url()->previous() }}">
                <button type="button" class="btn btn-secondary">Back</button>
            </a>
        </div>

        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Create Statement</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('president.club.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="president_id" value="{{ auth()->user()->id }}">
                    <div class="form-group">
                        <label for="exampleFormControlSelect12">Title</label>
                        <select class="form-control" id="exampleFormControlSelect12">
                            <option value="Welcome">Welcome</option>
                            <option value="About">About</option>
                            <option value="Vision">Vision</option>
                            <option value="Mission">Mission</option>
                            <option value="Plan">Plan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Club Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Club Description" rows="3"
                            name="description"></textarea><br>
                    </div>
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
