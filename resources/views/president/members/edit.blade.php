@extends('layouts.president')
@section('title', 'Edit a Member')
@section('content')
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header d-flex justify-content-md-between justify-content-center p-4"
                 style="background-color: #4c84ff !important;">
                <div class="text-leftt text-white pb-1 pb-md-0">
                    <h1>Edit Member</h1>
                </div>
                <div class="text-right">
                    <a href="{{ route('president.members.index') }}">
                        <button type="button" class="btn btn-secondary">Back</button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                               placeholder="Enter the Meeting Title" name="title" value="{{$member->name}}">
                        <input type="hidden" name="president_id" value="{{ auth()->user()->id }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Mobile</label>
                        <input type="tel" class="form-control" id="exampleFormControlInput1"
                               placeholder="Mobile" name="mobile" value="{{$member->mobile}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect12">Year</label>
                        <select class="form-control" id="exampleFormControlSelect12">
                            <option {{$member->degree_program == 'BICT' ?
                                                                    'selected' : ' '}} value="BICT">BICT
                            </option>
                            <option {{$member->degree_program == 'MRT' ?
                                                                    'selected' : ' '}} value="MRT">MRT
                            </option>
                            <option {{$member->degree_program == 'BET' ?
                                                                    'selected' : ' '}} value="BET">BET
                            </option>
                            <option {{$member->degree_program == 'ANS' ?
                                                                    'selected' : ' '}} value="ANS">ANS
                            </option>
                            <option {{$member->degree_program == 'AQT' ?
                                                                    'selected' : ' '}} value="AQT">AQT
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect12">Year</label>
                        <select class="form-control" id="exampleFormControlSelect12">
                            <option {{$member->year == 'first year' ?
                                                                    'selected' : ' '}}  value="first year">First Year
                            </option>
                            <option {{$member->year == 'second year' ?
                                                                    'selected' : ' '}} value="second year">Second Year
                            </option>
                            <option {{$member->year == 'third year' ?
                                                                    'selected' : ' '}} value="third year">Third Year
                            </option>
                            <option {{$member->year == 'fourth year' ?
                                                                    'selected' : ' '}} value="fourth ye ar">Fourth Year
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Address Line 1</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                               placeholder="Address Line 1" name="address_line_1" value="{{$member->address_line_1}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Address Line 2</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                               placeholder="Address Line 2" name="address_line_2" value="{{$member->address_line_2}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">City</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                               placeholder="City" name="city" value="{{$member->city}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Province</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                               placeholder="Province" name="province" value="{{$member->province}}">
                    </div>

                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
