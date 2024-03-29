@extends('layouts.member')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>User Profile</h2>
                <ol>
                    <li><a href="{{ route('dashboard') }}">Home</a></li>
                    <li><a href="{{ route('user.profile', Auth::user()->id) }}">User Profile</a></li>
                </ol>
            </div>

        </div>
    </section><!-- Breadcrumbs Section -->
    <div class="card">
        <div class="container-fluid">
            {{-- Member details update form --}}
            <form action="{{ route('user.profile.update') }}" method='POST' enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-lg-12 d-flex flex-lg-row  flex-column p-3 border-none">
                    <div class="col-lg-3">
                        <div class="row m-4">
                            <div>
                                <img
                                    src="{{ $user->profile_photo != null ? asset($user->profile_photo) : asset('assets/images/Icons/User/profile_pic.png') }}"
                                    alt="User profile" class="rounded-circle img-fluid"
                                    style="width: 100px; height: 100px;" id="profileImage"/>
                                <div class="mt-4">
                                    <label for="imageUpload" class="form-label"><b>Change
                                            Photo:</b></label><br>
                                    <input id="imageUpload" type="file" name="profile_photo" placeholder="Photo"
                                           value="{{ $user->profile_photo }}">
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
                                        {{ 'You are logged in!' }}
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
                                            data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                            aria-selected="false">Registered Clubs
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content home-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                     aria-labelledby="home-tab">
                                    <div class="col-xxl-12">
                                        <div class="row mt-2 justify-content-center">
                                            <strong class="my-2">Personal Information</strong>
                                            <div class="row my-2">
                                                <div class="col-xxl-6 d-xxl-flex  my-2">
                                                    <label for="name"
                                                           class="col-xxl-2 col-form-label">Username</label>
                                                    <div class="col-xxl-10">
                                                        <input type="text" class="form-control" id="name"
                                                               name="name" placeholder="Username"
                                                               value="{{ $user->name }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-xxl-6 d-xxl-flex  my-2">
                                                    <label for="first_name" class="col-xxl-2 col-form-label">First
                                                        Name</label>
                                                    <div class="col-xxl-10">
                                                        <input type="text" class="form-control" id="first_name"
                                                               name="first_name" placeholder="First Name"
                                                               value="{{ $user->first_name }}">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 d-xxl-flex my-2">
                                                    <label for="last_name" class="col-xxl-2 col-form-label">Last
                                                        Name</label>
                                                    <div class="col-xxl-10">
                                                        <input type="text" class="form-control" id="last_name"
                                                               name="last_name" placeholder="Last Name"
                                                               value="{{ $user->last_name }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <label for="full_name" class="col-xxl-1 col-form-label">Full
                                                    Name</label>
                                                <div class="col-xxl-11">
                                                    <input type="text" class="form-control" id="full_name"
                                                           name="full_name"
                                                           placeholder="Full Name" value="{{ $user->full_name }}">
                                                </div>
                                            </div>
                                            <div class="row my-2">
                                                <div class="col-xxl-4 d-xxl-flex my-2">
                                                    <label for="nic" class="col-xxl-2 col-form-label">NIC</label>
                                                    <div class="col-xxl-10">
                                                        <input type="text" class="form-control" id="nic" name="nic"
                                                               value="{{ $user->nic }}">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 d-xxl-flex my-2">
                                                    <label for="dob" class="col-xxl-3 col-form-label">Date Of
                                                        Birth</label>
                                                    <div class="col-xxl-9">
                                                        <input type="date" class="form-control" id="dob" name="dob"
                                                               value="{{ $user->dob }}">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 d-xxl-flex my-2 d-flex align-items-center">
                                                    <label for="sex" class="col-xxl-2 col-form-label me-3">Sex</label>
                                                    <div class="col-xxl-10">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" style="cursor: pointer"
                                                                   type="radio"
                                                                   name="sex" id="inlineRadio1"
                                                                   {{ $user->sex == 'Male' ? 'checked' : ' ' }} value="Male">
                                                            <label class="form-check-label"
                                                                   for="inlineRadio1">Male</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" style="cursor: pointer"
                                                                   type="radio"
                                                                   name="sex" id="inlineRadio2"
                                                                   {{ $user->sex == 'Female' ? 'checked' : ' ' }}
                                                                   value="Female">
                                                            <label class="form-check-label"
                                                                   for="inlineRadio2">Female</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" style="cursor: pointer"
                                                                   type="radio"
                                                                   name="sex" id="inlineRadio3"
                                                                   {{ $user->sex == 'Other' ? 'checked' : ' ' }} value="Other">
                                                            <label class="form-check-label"
                                                                   for="inlineRadio3">Other...</label>
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
                                                                    <option
                                                                        {{ $user->degree_program == 'BICT' ? 'selected' : ' ' }}
                                                                        value="BICT">BICT
                                                                    </option>
                                                                    <option
                                                                        {{ $user->degree_program == 'MRT' ? 'selected' : ' ' }}
                                                                        value="MRT">MRT
                                                                    </option>
                                                                    <option
                                                                        {{ $user->degree_program == 'BET' ? 'selected' : ' ' }}
                                                                        value="BET">BET
                                                                    </option>
                                                                    <option
                                                                        {{ $user->degree_program == 'ANS' ? 'selected' : ' ' }}
                                                                        value="ANS">ANS
                                                                    </option>
                                                                    <option
                                                                        {{ $user->degree_program == 'AQT' ? 'selected' : ' ' }}
                                                                        value="AQT">AQT
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-6 d-xxl-flex my-2">
                                                            <label for="last_name"
                                                                   class="col-xxl-1 col-form-label">Year</label>
                                                            <div class="col-xxl-11">
                                                                <select class="form-select"
                                                                        aria-label="Default select example"
                                                                        name="year">
                                                                    <option
                                                                        {{ $user->year == 'first year' ? 'selected' : ' ' }}
                                                                        value="first year">First Year
                                                                    </option>
                                                                    <option
                                                                        {{ $user->year == 'second year' ? 'selected' : ' ' }}
                                                                        value="second year">Second Year
                                                                    </option>
                                                                    <option
                                                                        {{ $user->year == 'third year' ? 'selected' : ' ' }}
                                                                        value="third year">Third Year
                                                                    </option>
                                                                    <option
                                                                        {{ $user->year == 'fourth year' ? 'selected' : ' ' }}
                                                                        value="fourth ye ar">Fourth Year
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="dropdown-divider"></div>
                                                <strong class="my-2">Contact Information</strong>
                                                <div class="col-xxl-6 d-xxl-flex  my-2">
                                                    <label for="mobile" class="col-xxl-3 col-form-label">Mobile</label>
                                                    <div class="col-xxl-9">
                                                        <input type="text" class="form-control" id="mobile"
                                                               name="mobile"
                                                               placeholder="Mobile" value="{{ $user->mobile }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-xxl-6 d-xxl-flex  my-2">
                                                    <label for="address_line_1" class="col-xxl-3 col-form-label">Address
                                                        Line 1</label>
                                                    <div class="col-xxl-9">
                                                        <input type="text" class="form-control" id="address_line_1"
                                                               name="address_line_1" placeholder="Address Line 1"
                                                               value="{{ $user->address_line_1 }}">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 d-xxl-flex my-2">
                                                    <label for="address_line_2" class="col-xxl-3 col-form-label">Address
                                                        Line 2</label>
                                                    <div class="col-xxl-9">
                                                        <input type="text" class="form-control" id="address_line_2"
                                                               name="address_line_2" placeholder="Address Line 2"
                                                               value="{{ $user->address_line_2 }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-xxl-4 d-xxl-flex  my-2">
                                                    <label for="city" class="col-xxl-2 col-form-label">City</label>
                                                    <div class="col-xxl-10">
                                                        <input type="text" class="form-control" id="city" name="city"
                                                               placeholder="City" value="{{ $user->city }}">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 d-xxl-flex my-2">
                                                    <label for="province"
                                                           class="col-xxl-3 col-form-label">Province</label>
                                                    <div class="col-xxl-9">
                                                        <input type="text" class="form-control" id="province"
                                                               name="province"
                                                               placeholder="Province" value="{{ $user->province }}">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-4 d-xxl-flex my-2">
                                                    <label for="postal_code" class="col-xxl-4 col-form-label">Postal
                                                        Code</label>
                                                    <div class="col-xxl-8">
                                                        <input type="text" class="form-control" id="postal_code"
                                                               name="postal_code" placeholder="Postal Code"
                                                               value="{{ $user->postal_code }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end my-4">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <a class="btn btn-outline-dark ms-2" href="{{ route('dashboard') }}">Back</a>
                                            </div>
                                        </div>
            </form>
            <div class="col-xxl-12 px-2">
                <div class="row mt-2">
                    <div class="dropdown-divider"></div>
                    <strong class="my-2">Change Password</strong>
                    <form method="POST" action="{{ route('user.password.change') }}" class="form-pill">
                        @csrf
                        @method('PUT')

                        <div class="row mt-2">
                            <div class="col-xxl-12 d-xxl-flex  my-2">
                                <label for="current_password" class="col-xxl-2 col-form-label">Current
                                    Password</label>
                                <div class="col-xxl-10">
                                    <input type="password" class="form-control" id="current_password"
                                           name="current_password" placeholder="Current Password">
                                </div>
                            </div>
                            <div class="col-xxl-12 d-xxl-flex  my-2">
                                @error('current_password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-xxl-12 d-xxl-flex  my-2">
                                <label for="password" class="col-xxl-2 col-form-label">New Password</label>
                                <div class="col-xxl-10">
                                    <input type="password" class="form-control" id="password" name="password"
                                           placeholder="New Password">
                                </div>
                            </div>
                            <div class="col-xxl-12 d-xxl-flex  my-2">
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-xxl-12 d-xxl-flex  my-2">
                                <label for="password_confirmation" class="col-xxl-2 col-form-label">Confirm
                                    Password</label>
                                <div class="col-xxl-10">
                                    <input type="password" class="form-control" id="password_confirmation"
                                           name="password_confirmation" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="col-xxl-12 d-xxl-flex  my-2">
                                @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-end my-4">
                                <button type="submit" class="btn btn-primary">Update
                                    Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-2 px-2">
                <div class="dropdown-divider"></div>
                <strong class="my-2">Change Email</strong>
                <form method="POST" action="{{ route('user.email.change') }}" class="form-pill">
                    @csrf
                    @method('PUT')
                    <div class="col-xxl-12 d-xxl-flex  my-2">
                        <label for="new_email" class="col-xxl-2 col-form-label">Email</label>
                        <div class="col-xxl-10">
                            <input type="email" class="form-control" id="new_email" name="new_email"
                                   placeholder="Enter New Email Address">
                        </div>
                    </div>
                    <div class="col-xxl-12 d-xxl-flex  my-2">
                        @error('new_email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end my-4">
                        <button type="submit" class="btn btn-primary">Change Email
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row p-1 my-3">
            @if($registered_clubs->isEmpty())
                <div class="text-center p-3">
                    <h1>{{ __('You have not registered to any club') }}</h1>
                    <a href="{{ url('user/dashboard/#portfolio') }}"><i
                            class="fa-solid fa-object-exclude fa-8x m-2"></i>
                        <p>view clubs</p></a>
                </div>
            @else
                <div class="col-sm-3 col-md-4 my-2">
                    @foreach($registered_clubs as $registered_club)
                        <div class="row g-0">
                            <div class="card shadow-sm mb-3 bg-light" style="min-height:8rem">
                                <a href="{{route('club.view', $registered_club->id)}}">
                                    <div class="row flex-row">
                                        <img
                                            src="{{asset($registered_club->registeredClub->image)}}"
                                            alt="Art club" class="img-fluid rounded-start w-100"
                                            style="max-height:8rem;">
                                        <div class="card-body my-1 m-2">
                                            <h5 class="card-title">
                                                <strong>{{$registered_club->registeredClub->name}}</strong></h5>
                                            <p class="card-text">Registered
                                                on: {{$registered_club->created_at->format('d/m/Y')}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
        @endif
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
