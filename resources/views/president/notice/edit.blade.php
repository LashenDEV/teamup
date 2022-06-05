@extends('layouts.president')
@section('title', 'Edit Notice')
@section('content')
<div class="col-lg-12">
    <div class="card card-default">
        <div class="card-header d-flex  justify-content-md-between justify-content-center p-4"
             style="background-color: #4c84ff !important">
            <div class="text-leftt text-white pb-1 pb-md-0">
                <h1>Submit a Notice</h1>
            </div>
            <div class="text-right">
                <a href="{{ route('president.event.index') }}">
                    <button type="button" class="btn btn-secondary">Back</button>
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('president.notice.store') }}" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Notice</label>
                    <textarea class="form-control" id="description" placeholder="Enter the Notice"
                              name="description" rows="3"></textarea>
                </div>

                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                    <button type="submit" class="btn btn-primary btn-default">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
