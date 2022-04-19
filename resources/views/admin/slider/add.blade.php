@extends('layouts.admin')
@section('title', 'Add Slider')
@section('content')
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Create Slider</h2>
            </div>
            <div class="card-body">
                <form action="{{route('admin.store.slider')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="president_id" value="{{auth()->user()->id}}">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Slider Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                               placeholder="Slider Title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Slider Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Slider Description"
                                  rows="3"
                                  name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Slider Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </div>
@endsection
