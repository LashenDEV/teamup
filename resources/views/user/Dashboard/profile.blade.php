<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
@extends('layouts.member')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
<div class="card">
        <div class="container-fluid m-3">
        <ol>
            <li><a href="{{ route('user.dashboard') }}"><h5>Home</h5></a></li>
        </ol>
        <h3><b>Profile</b></h3>
        </div>

    <div class="container-fluid m-3 emp-profile">
        <form method="post">
            <div class="row">
                <div class="card col-md-4">
                    <div class="profile-img">
                        <img src="https://image.pngaaa.com/117/4811117-small.png" alt="User profile" class="rounded-circle img-fluid" style="width: 150px;"/>
                        <div class="file btn btn-sm btn-primary">
                            Change Photo
                            <input type="file" name="file"/>
                        </div>
                    </div>
                </div>   
                <div class="card col-md-8">
                    <div class="profile-head">
                        <h5>
                            {{ Auth::user()->name }}
                        </h5>
                        <h6>
                            Student
                        </h6>
                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                                {{('You are logged in!')}} 
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card col-md-4">
                    <div class="profile-club">
                        <p><br>CLUB LINK</p>
                        <a href="">club</a><br/>
                        <a href="">club</a><br/>
                        <a href="">club</a>
                    </div>
                </div>
                <div class="card col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6"> <br>
                                    <label>Name</label>
                                </div>
                                <div class="form-group col-md-5"><br>
                                    <input type="text" class="form-control" name="username" value="jhon">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Date of Birth</label>
                                </div>
                                <div class="form-group col-md-5">
                                    <input type="date" id="birthday" class="form-control" name="birthday">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Faculty</label>
                                </div>
                                <div class="form-group col-md-5">
                                    <input type="text" class="form-control" name="faculty" value="Technological studies">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Degree Program</label>
                                </div>
                                <div class="form-group col-md-5">
                                    <input type="text" class="form-control" name="d.program" value="ICT">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="form-group col-md-5">
                                    <input type="email" id ="email" class="form-control" name="e-mail" value="jhon@gmail.com">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone Number</label>
                                </div>
                                <div class="form-group col-md-5">
                                    <input type="tel" class="form-control" name="p.number" value="1234567890">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Parent's Phone Number</label>
                                </div>
                                <div class="form-group col-md-5">
                                    <input type="tel" class="form-control" name="p.p.number" value="9876543210">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Country</label>
                                </div>
                                <div class="form-group col-md-5">
                                    <input type="text" class="form-control" name="country" value="Sri Lanka">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Availability</label>
                                </div>
                                <div class="col-md-6">
                                    <p>6 months</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Your Bio</label><br/>
                                    <p>Your detail description</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                        <input type="submit" class="profile-edit-btn" name="BtnAddMore" value="Update">
                        </div>  
                    </div>
                </div>
            </div>
        </form>           
    </div>
</div>

@endsection
