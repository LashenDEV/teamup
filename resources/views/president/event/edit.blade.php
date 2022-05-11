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
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Event Name</label>
            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Event Name">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Description</label>
            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Description">
        </div>
                                          
                                          
        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
                                          
        <div class="form-footer pt-4 pt-5 mt-4 border-top">
            <button type="submit" class="btn btn-primary btn-default">Submit</button>
            <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
        </div>
    </form>
</div>
</div>

@endsection