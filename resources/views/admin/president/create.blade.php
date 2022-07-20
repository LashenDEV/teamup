@extends('layouts.admin')
@section('title', 'Add President')
@section('content')
    <div class="col-lg-12 p-0">
        <div class="card card-default border-0">
            <div class="card-header d-flex justify-content-md-between justify-content-center p-4"
                 style="background-color: #4c84ff !important;">
                <div class="text-leftt text-white pb-1 pb-md-0">
                    <h1>Create President</h1>
                </div>
                <div class="text-right">
                    <a href="{{url()->previous() == 'https://teamup.test/admin/dashboard' ? route('admin.dashboard') : url()->previous()}}">
                        <button type="button" class="btn btn-secondary">Back</button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('admin.president.store')}}" method="POST">
                    @csrf
                    <div class="form-group row flex-column">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">username</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="First name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control"
                                       placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control"
                                       placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-footer pt-5 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Submit</button>
                        <a href="{{route('admin.president.index')}}"><button type="button" class="btn btn-secondary">Cancel</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
