@extends('layouts.admin')
@section('title', 'Profile')
@section('content')
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header d-flex justify-content-md-between justify-content-center p-4"
                style="background-color: #4c84ff !important;">
                <div class="text-leftt text-white pb-1 pb-md-0">
                    <h1>Edit President</h1>
                </div>
                <div class="text-right">
                    <a href="{{ route('president.members.index') }}">
                        <button type="button" class="btn btn-secondary">Back</button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="col-lg-12 d-flex flex-lg-row p-3">
                    <div class="row m-4">
                        <div class="col-md-3">
                            <div>
                                <img src="https://club-management-system.test/frontend/assets/img/icons/profile/profile-pic.png"
                                    alt="User profile" class="rounded-circle img-fluid" style="width: 100px; height: 100px;"
                                    id="profileImage" />
                                <div class="mt-4">
                                    <label for="imageUpload" class="form-label"><b>Change
                                            Photo:</b></label><br>
                                    <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo" value="">
                                    <br>
                                </div>
                                <div class="profile-head">
                                    <h4>
                                        <b><br>President</b>
                                    </h4>
                                    <div class="card-body-left">
                                        You are logged in!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="text-dark font-weight-medium" for="exampleFormControlPassword">User
                                            Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlPassword"
                                            placeholder="President">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark font-weight-medium" for="fname">First name</label>
                                        <input type="text" class="form-control" placeholder="John">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark font-weight-medium" for="lname">Last name</label>
                                        <input type="text" class="form-control" placeholder="Smith">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="text-dark font-weight-medium" for="fname">Full Name</label>
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="text-dark font-weight-medium"
                                            for="exampleFormControlInput1">NIC</label>
                                        <input type="password" class="form-control" id="exampleFormControlInput1"
                                            placeholder="ID No" name="mobile">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label class="text-dark font-weight-medium" for="">Day Of Birth</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-calendar-range"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" data-mask="00/00/0000"
                                            placeholder="dd/mm/yyyy" aria-label="">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <label class="text-dark mb-2 mt-4 font-weight-medium d-inline-block mr-3"
                                        for="">Sex</label>
                                    <ul class="list-unstyled list-inline">
                                        <li class="d-inline-block mr-3">
                                            <label class="control control-radio">Male
                                                <input type="radio" name="option" checked="checked" />
                                                <div class="control-indicator"></div>
                                            </label>
                                        </li>
                                        <li class="d-inline-block mr-3">
                                            <label class="control control-radio">Female
                                                <input type="radio" name="option" />
                                                <div class="control-indicator"></div>
                                            </label>
                                        </li>
                                        <li class="d-inline-block">
                                            <label class="control control-radio">Other
                                                <input type="radio" name="option" disabled="disabled" />
                                                <div class="control-indicator"></div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark font-weight-medium" for="Degree">Degree Program</label>
                                        <select class="form-control" id="exampleFormControlSelect12">
                                            <option>BICT</option>
                                            <option>BET</option>
                                            <option>BBST</option>
                                            <option>AQT</option>
                                            <option>ANS</option>
                                            <option>IIT</option>
                                            <option>CST</option>
                                            <option>TEA</option>
                                            <option>HRM</option>
                                            <option>MRT</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark font-weight-medium" for="Year">Academic Year</label>
                                        <select class="form-control" id="exampleFormControlSelect12">
                                            <option>First Year</option>
                                            <option>Second Year</option>
                                            <option>Third Year</option>
                                            <option>Fourth Year</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark font-weight-medium" for="mobile">Mobile</label>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="mdi mdi-phone"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" data-mask="(999) 999-9999"
                                                placeholder="" aria-label="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark font-weight-medium" for="exampleFormControlInput1">Email
                                            address</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark font-weight-medium" for="fname">Address Line1</label>
                                        <input type="text" class="form-control" placeholder="Address Line1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark font-weight-medium" for="lname">Address Line2</label>
                                        <input type="text" class="form-control" placeholder="Address Line2">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="text-dark font-weight-medium" for="city">City</label>
                                        <input type="text" class="form-control" placeholder="City Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="text-dark font-weight-medium" for="State">Province</label>
                                                <input type="text" class="form-control" placeholder="Province">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="text-dark font-weight-medium" for="Zip">Zip</label>
                                                <input type="text" class="form-control" placeholder="Zip">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="text-right">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-default">Save</button>
                                            <button type="button" class="btn btn-secondary">Back</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12  px-0">
                                    <div class="dropdown-divider"></div>
                                    <div class="col-sm-6 pt-3">
                                        <div class="form-group">
                                            <label class="text-dark font-weight-medium"
                                                for="exampleFormControlPassword">Current
                                                Password</label>
                                            <input type="password" class="form-control" id="exampleFormControlPassword"
                                                placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="text-dark font-weight-medium"
                                                for="exampleFormControlPassword">New
                                                Password</label>
                                            <input type="password" class="form-control" id="exampleFormControlPassword"
                                                placeholder="New Password">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="text-dark font-weight-medium"
                                                for="exampleFormControlPassword">Confirm
                                                Password</label>
                                            <input type="password" class="form-control" id="exampleFormControlPassword"
                                                placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="text-right">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-default">Update
                                                    Password</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12  px-0">
                                    <div class="dropdown-divider"></div>
                                    <div class="col-sm-12 pt-3">
                                        <div class="form-group">
                                            <label class="text-dark font-weight-medium"
                                                for="exampleFormControlPassword">Change
                                                Email</label>
                                            <input type="email" class="form-control" id="exampleFormControlPassword"
                                                placeholder="Enter new email address here">
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="text-right">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-default">Change
                                                        Email</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
