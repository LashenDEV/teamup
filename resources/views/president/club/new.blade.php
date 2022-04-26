@extends('layouts.president')
@section('title', 'new club')
@section('content')
{{-- //new club here please remove this comment after done the job --}}
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header card-header-border-bottom">
            <h2>Create Club</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="president_id" value="{{auth()->user()->id}}">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Club Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1"
                           placeholder="Club Name" name="title">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Club Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Club Description"
                              rows="3"
                              name="description"></textarea><br>
                    
                    <label for="exampleFormControlTextarea1">Goals of Club</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Club Vision"
                               rows="3"
                               name="description"></textarea><br>

                    <label for="exampleFormControlTextarea1">Club Mission</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Club Mission"
                                rows="3"
                                name="description"></textarea>

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