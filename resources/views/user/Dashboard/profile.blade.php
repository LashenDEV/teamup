@extends('layouts.member')
@section('content')
    <div class="card">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container-fluid m-3">
                <h3><b>Profile</b></h3>
            </div>

            <div class="container-fluid">
                {{--Member details update form--}}
                <div class="card">
                    <form action="{{route('profile.update')}}" method='POST' enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-lg-12 d-flex flex-lg-row p-3">
                            <div class="col-lg-3">
                                <div class="row m-4">
                                    <div>
                                        <img
                                            src="{{ $user->profile_photo != null ? asset($user->profile_photo) : asset('frontend/assets/img/icons/profile/profile-pic.png')}}"
                                            alt="User profile"
                                            class="rounded-circle img-fluid"
                                            style="width: 100px; height: 100px;"
                                            id="profileImage"/>
                                        <div class="mt-4">
                                            <label for="imageUpload" class="form-label"><b>Change
                                                    Photo:</b></label><br>
                                            <input id="imageUpload" type="file"
                                                   name="profile_photo" placeholder="Photo">
                                            <br>
                                        </div>
                                        <div class="profile-head">
                                            <h4>
                                                <b><br>{{ Auth::user()->name }}</br></b>
                                            </h4>
                                            <div class="card-body-left">
                                                @if (session('status'))
                                                    <div class="alert alert-success" role="alert">
                                                        <br>{{ session('status') }}
                                                    </div>
                                                @endif
                                                {{('You are logged in!')}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                                    aria-selected="true">Details
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                    data-bs-target="#profile" type="button" role="tab"
                                                    aria-controls="profile" aria-selected="false">Registered Clubs
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content home-tab" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                             aria-labelledby="home-tab">
                                            <div class="col-xxl-12">
                                                <div class="row mt-2">
                                                    <strong class="my-2">Personal Information</strong>
                                                    <div class="col-xxl-6 d-xxl-flex  my-2">
                                                        <label for="first_name" class="col-xxl-2 col-form-label">First
                                                            Name</label>
                                                        <div class="col-xxl-10">
                                                            <input type="text" class="form-control" id="first_name"
                                                                   name="first_name"
                                                                   placeholder="First Name" value="{{$user->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-6 d-xxl-flex my-2">
                                                        <label for="last_name" class="col-xxl-2 col-form-label">Last
                                                            Name</label>
                                                        <div class="col-xxl-10">
                                                            <input type="text" class="form-control" id="last_name"
                                                                   name="last_name"
                                                                   placeholder="Last Name"
                                                                   value="{{$user->last_name}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <label for="full_name" class="col-xxl-1 col-form-label">Full
                                                        Name</label>
                                                    <div class="col-xxl-11">
                                                        <input type="text" class="form-control" id="full_name"
                                                               name="full_name"
                                                               placeholder="Full Name"
                                                               value="{{$user->full_name}}">
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-xxl-6 d-xxl-flex my-2">
                                                        <label for="dob"
                                                               class="col-xxl-2 col-form-label">DOB</label>
                                                        <div class="col-xxl-10">
                                                            <input type="date" class="form-control" id="dob"
                                                                   name="dob"
                                                                   value="{{$user->dob}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-6 d-xxl-flex my-2 d-flex align-items-center">
                                                        <label for="sex"
                                                               class="col-xxl-2 col-form-label">Sex</label>
                                                        <div class="col-xxl-10">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                       name="sex" id="inlineRadio1" {{$user->sex == 'Male' ?
                                                                    'checked' : ' '}}
                                                                       value="Male">
                                                                <label class="form-check-label"
                                                                       for="inlineRadio1">Male</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                       name="sex" id="inlineRadio2" {{$user->sex == 'Female' ?
                                                                    'checked' : ' '}}
                                                                       value="Female">
                                                                <label class="form-check-label" for="inlineRadio2">Female</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                       name="sex" id="inlineRadio3" {{$user->sex == 'Other' ?
                                                                    'checked' : ' '}}
                                                                       value="Other">
                                                                <label class="form-check-label" for="inlineRadio3">Other...</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12">
                                                    <div class="row">
                                                        <div class="col-xxl-6 d-xxl-flex my-2">
                                                            <label for="degree_program"
                                                                   class="col-xxl-3 col-form-label">Degree
                                                                Program</label>
                                                            <div class="col-xxl-9">
                                                                <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="degree_program">
                                                                    <option {{$user->degree_program == 'BICT' ?
                                                                    'selected' : ' '}} value="BICT">BICT
                                                                    </option>
                                                                    <option {{$user->degree_program == 'MRT' ?
                                                                    'selected' : ' '}} value="MRT">MRT
                                                                    </option>
                                                                    <option {{$user->degree_program == 'BET' ?
                                                                    'selected' : ' '}} value="BET">BET
                                                                    </option>
                                                                    <option {{$user->degree_program == 'ANS' ?
                                                                    'selected' : ' '}} value="ANS">ANS
                                                                    </option>
                                                                    <option {{$user->degree_program == 'AQT' ?
                                                                    'selected' : ' '}} value="AQT">AQT
                                                                    </option>
                                                                    <option value="BBST">BBST</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6 d-xxl-flex my-2">
                                                            <label for="last_name"
                                                                   class="col-xxl-1 col-form-label">Year</label>
                                                            <div class="col-xxl-11">
                                                                <select class="form-select"
                                                                        aria-label="Default select example" name="year">
                                                                    <option {{$user->year == 'first year' ?
                                                                    'selected' : ' '}}  value="first year">First Year
                                                                    </option>
                                                                    <option {{$user->year == 'second year' ?
                                                                    'selected' : ' '}} value="second year">Second Year
                                                                    </option>
                                                                    <option {{$user->year == 'third year' ?
                                                                    'selected' : ' '}} value="third year">Third Year
                                                                    </option>
                                                                    <option {{$user->year == 'fourth year' ?
                                                                    'selected' : ' '}} value="fourth ye ar">Fourth Year
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="dropdown-divider"></div>
                                                    <strong class="my-2">Contact Information</strong>
                                                    <div class="col-xxl-6 d-xxl-flex  my-2">
                                                        <label for="mobile"
                                                               class="col-xxl-3 col-form-label">Mobile</label>
                                                        <div class="col-xxl-9">
                                                            <input type="text" class="form-control" id="mobile"
                                                                   name="mobile"
                                                                   placeholder="Mobile"
                                                                   value="{{$user->mobile}}"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-6 d-xxl-flex my-2">
                                                        <label for="email"
                                                               class="col-xxl-3 col-form-label">Email</label>
                                                        <div class="col-xxl-9">
                                                            <input type="text" class="form-control" id="email"
                                                                   name="email"
                                                                   placeholder="Email" value="{{$user->email}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-xxl-6 d-xxl-flex  my-2">
                                                        <label for="address_line_1" class="col-xxl-3 col-form-label">Address
                                                            Line 1</label>
                                                        <div class="col-xxl-9">
                                                            <input type="text" class="form-control" id="address_line_1"
                                                                   name="address_line_1"
                                                                   placeholder="Address Line 1"
                                                                   value="{{$user->address_line_1}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-6 d-xxl-flex my-2">
                                                        <label for="address_line_2" class="col-xxl-3 col-form-label">Address
                                                            Line 2</label>
                                                        <div class="col-xxl-9">
                                                            <input type="text" class="form-control" id="address_line_2"
                                                                   name="address_line_2"
                                                                   placeholder="Address Line 2"
                                                                   value="{{$user->address_line_2}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-xxl-4 d-xxl-flex  my-2">
                                                        <label for="city"
                                                               class="col-xxl-2 col-form-label">City</label>
                                                        <div class="col-xxl-10">
                                                            <input type="text" class="form-control" id="city"
                                                                   name="city"
                                                                   placeholder="City"
                                                                   value="{{$user->city}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-4 d-xxl-flex my-2">
                                                        <label for="province"
                                                               class="col-xxl-3 col-form-label">Province</label>
                                                        <div class="col-xxl-9">
                                                            <input type="text" class="form-control" id="province"
                                                                   name="province"
                                                                   placeholder="Province"
                                                                   value="{{$user->province}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-4 d-xxl-flex my-2">
                                                        <label for="postal_code"
                                                               class="col-xxl-4 col-form-label">Postal Code</label>
                                                        <div class="col-xxl-8">
                                                            <input type="text" class="form-control" id="postal_code"
                                                                   name="postal_code"
                                                                   placeholder="Postal Code"
                                                                   value="{{$user->postal_code}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end my-4">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                    <button type="reset" class="btn btn-light ms-3">Cancel</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                             aria-labelledby="profile-tab">how
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <script>
                $("#profileImage").click(function (e) {
                    $("#imageUpload").click();
                });

                function fasterPreview(uploader) {
                    if (uploader.files && uploader.files[0]) {
                        $('#profileImage').attr('src',
                            window.URL.createObjectURL(uploader.files[0]));
                    }
                }

                $("#imageUpload").change(function () {
                    fasterPreview(this);
                });
            </script>
@endsection

