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
                    <a href="{{ url()->previous() }}">
                        <button type="button" class="btn btn-secondary">Back</button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('president.notice.update', $notice->id) }}" method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="notice">Notice</label>
                        <input type="hidden" value="{{Auth::user()->id}}" name="president_id">
                        <input type="hidden" name="club_id"
                               value="{{\App\Models\Clubs::where('president_id', auth()->user()->id)->first()->id}}">
                        <textarea class="form-control" id="notice" placeholder="Edit the Notice"
                                  name="notice" rows="3">{{$notice->notice}}</textarea>
                    </div>

                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
