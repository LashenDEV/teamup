@extends('layouts.admin')
@section('title', 'Profile')
@section('content')
    <div class="col-lg-12 p-0">
        <div class="card card-default">
            <div class="card-header d-flex flex-column flex-md-row justify-content-md-between justify-content-center p-4"
                style="background-color: #4c84ff !important;">
                <div class="text-leftt text-white pb-1 pb-md-0">
                    <h1>Your Profile</h1>
                </div>
                <div class="text-right">
                    <a href="{{ route('admin.dashboard') }}">
                        <button type="button" class="btn btn-secondary">Back</button>
                    </a>
                </div>
            </div>
            <div class="card-body p-3">
                <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-lg-12 d-flex flex-lg-row justify-content-center">
                        <div class="row m-4">
                            <div class="col-md-3">
                                <div>
                                    <img src="{{ $admin->profile_photo != null ? asset($admin->profile_photo) : asset('assets/images/Icons/User/profile_pic.png') }}"
                                        alt="User profile" class="rounded-circle img-fluid"
                                        style="width: 100px; height: 100px;" id="profileImage" />
                                    <div class="mt-4">
                                        <label for="imageUpload" class="form-label"><b>Change
                                                Photo:</b></label><br>
                                        <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo"
                                            value="{{ $admin->profile_photo }}">
                                        <br>
                                    </div>
                                    <div class="profile-head">
                                        <h4>
                                            <br>{{ Auth::user()->name }}
                                        </h4>
                                        <div class="card-body-left">
                                            You are logged in!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="py-2">
                                            <p class="font-weight-bold text-secondary blockquote">Personal Information</p>
                                        </div>
                                        <div class="form-group">
                                            <label class="text-dark" for="exampleFormControlPassword">Username</label>
                                            <input type="text" class="form-control" id="exampleFormControlPassword"
                                                placeholder="Username" name="name" value="{{ $admin->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="text-dark" for="first_name">First name</label>
                                                    <input type="text" class="form-control" placeholder="John"
                                                        name="first_name" value="{{ $admin->first_name }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="text-dark" for="last_name">Last name</label>
                                                    <input type="text" class="form-control" placeholder="mdith"
                                                        name="last_name" value="{{ $admin->last_name }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="text-dark" for="fname">Full Name</label>
                                                    <input type="text" class="form-control" placeholder="Full Name"
                                                        name="full_name" value="{{ $admin->full_name }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="text-dark" for="exampleFormControlInput1">NIC</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                                        placeholder="ID No" name="nic" value="{{ $admin->nic }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="text-dark" for="">Day Of Birth</label>
                                                <div class="input-group">
                                                    <input type="date" class="form-control" id="dob" name="dob"
                                                        value="{{ $admin->dob }}">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="text-dark mb-2 d-inline-block mr-3" for="">Sex</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" style="cursor: pointer"
                                                        type="radio" name="sex" id="inlineRadio1"
                                                        {{ $admin->sex == 'Male' ? 'checked' : ' ' }} value="Male">
                                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" style="cursor: pointer"
                                                        type="radio" name="sex" id="inlineRadio2"
                                                        {{ $admin->sex == 'Female' ? 'checked' : ' ' }} value="Female">
                                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" style="cursor: pointer"
                                                        type="radio" name="sex" id="inlineRadio3"
                                                        {{ $admin->sex == 'Other' ? 'checked' : ' ' }} value="Other">
                                                    <label class="form-check-label" for="inlineRadio3">Other...</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="text-dark" for="Degree">Degree Program</label>
                                                    <select class="form-control" id="exampleFormControlSelect12"
                                                        name="degree_program">
                                                        <option {{ $admin->degree_program == 'BICT' ? 'selected' : ' ' }}
                                                            value="BICT">BICT
                                                        </option>
                                                        <option {{ $admin->degree_program == 'MRT' ? 'selected' : ' ' }}
                                                            value="MRT">MRT
                                                        </option>
                                                        <option {{ $admin->degree_program == 'BET' ? 'selected' : ' ' }}
                                                            value="BET">BET
                                                        </option>
                                                        <option {{ $admin->degree_program == 'ANS' ? 'selected' : ' ' }}
                                                            value="ANS">ANS
                                                        </option>
                                                        <option {{ $admin->degree_program == 'AQT' ? 'selected' : ' ' }}
                                                            value="AQT">AQT
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="text-dark" for="Year">Academic Year</label>
                                                    <select class="form-control" id="exampleFormControlSelect12"
                                                        name="year">
                                                        <option {{ $admin->year == 'first year' ? 'selected' : ' ' }}
                                                            value="first year">First Year
                                                        </option>
                                                        <option {{ $admin->year == 'second year' ? 'selected' : ' ' }}
                                                            value="second year">Second Year
                                                        </option>
                                                        <option {{ $admin->year == 'third year' ? 'selected' : ' ' }}
                                                            value="third year">Third Year
                                                        </option>
                                                        <option {{ $admin->year == 'fourth year' ? 'selected' : ' ' }}
                                                            value="fourth ye ar">Fourth Year
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="dropdown-divider"></div>
                                        <div class="py-2">
                                            <p class="font-weight-bold text-secondary blockquote">Contact Infromation</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="text-dark" for="mobile">Mobile</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="mdi mdi-phone"></i>
                                                            </span>
                                                        </div>
                                                        <input type="mobile" class="form-control"
                                                            data-mask="(999) 999-9999" name="mobile" placeholder=""
                                                            aria-label="" value="{{ $admin->mobile }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="text-dark" for="fname">Address Line1</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Address Line1" name="address_line_1"
                                                        value="{{ $admin->address_line_1 }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="text-dark" for="lname">Address Line2</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Address Line2" name="address_line_2"
                                                        value="{{ $admin->address_line_2 }}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="text-dark" for="city">City</label>
                                                    <input type="text" class="form-control" placeholder="City Name"
                                                        name="city" value="{{ $admin->city }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="text-dark" for="State">Province</label>
                                                    <input type="text" class="form-control" placeholder="Province"
                                                        name="province" value="{{ $admin->province }}">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="text-dark" for="Postal Code">Postal Code</label>
                                                    <input type="text" class="form-control" placeholder="Postal Code"
                                                        name="postal_code" value="{{ $admin->postal_code }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-right">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-default">Save</button>
                                                <button type="button" class="btn btn-secondary">Back</button>
                                            </div>
                                        </div>
                                    </div>
                </form>

                <div class="col-md-12">
                    <div class="dropdown-divider"></div>
                    <div class="py-2">
                        <p class="font-weight-bold text-secondary blockquote">Change Password</p>
                    </div>
                    <form method="POST" action="{{ route('admin.password.change') }}">
                        @csrf
                        @method('PUT')
                        <div class="row flex-column">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark" for="exampleFormControlPassword">Current
                                        Password</label>
                                    <input type="password" class="form-control" id="exampleFormControlPassword"
                                        placeholder="Password" name="current_password">
                                    @error('current_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark" for="exampleFormControlPassword">New
                                        Password</label>
                                    <input type="password" class="form-control" id="exampleFormControlPassword"
                                        placeholder="New Password" name="password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-dark" for="exampleFormControlPassword">Confirm
                                        Password</label>
                                    <input type="password" class="form-control" id="exampleFormControlPassword"
                                        placeholder="Confirm Password" name="password_confirmation">
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-right">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-default">Update
                                            Password</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-12">
                    <form action="{{ route('admin.email.change') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="dropdown-divider"></div>
                        <div class="py-2">
                            <p class="font-weight-bold text-secondary blockquote">Change Email-Address</p>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="exampleFormControlPassword">Change
                                Email</label>
                            <input type="email" class="form-control" id="exampleFormControlPassword"
                                placeholder="Enter new email address here" name="new_email">
                            @error('new_email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-default">Change
                                    Email</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <script>
        $("#profileImage").click(function(e) {
            $("#imageUpload").click();
        });

        function fasterPreview(uploader) {
            if (uploader.files && uploader.files[0]) {
                $('#profileImage').attr('src',
                    window.URL.createObjectURL(uploader.files[0]));
            }
        }

        $("#imageUpload").change(function() {
            fasterPreview(this);
        });
    </script>
@endsection
