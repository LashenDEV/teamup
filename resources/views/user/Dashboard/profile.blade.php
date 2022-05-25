<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.profile.blade.css"/>
</head>
@extends('layouts.member')

@section('content')

<div class="card">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container-fluid m-3">
        <h3><b>Profile</b></h3>
        </div>

    <div class="container-fluid m-3 emp-profile">
        <form method="post">
            <div class="card">
                <div class="container-fluid m-1">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-img">
                                <img src="https://image.pngaaa.com/117/4811117-small.png" alt="User profile" class="rounded-circle img-fluid" style="width: 150px;"/>
                                <div class="text-left">
                                    <label><b>Change Photo:</b></label> 
                                    <input type="file" id="myfile" name="myfile"><br>
                                    <div class="text-left">
                                        <button type="submit" class="btn-sm btn-primary">Submit</button>
                                        <button type="reset" class="btn-sm btn-primary">Delete</button>
                                    </div><br>    
                                </div>
                            </div>
                        </div>   
                        <div class="col-md-4">
                            <div class="profile-head">
                                <h4>
                                    <b><br>{{ Auth::user()->name }}</br>
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
            </div>
            <div class="container-fluid m-1">
                <div class="row">
                    <div class="card">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="active"><br>
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                            </li>
                            <li class="nav-item"><br>
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Club Link</a>
                            </li>
                        </ul>
                        <div class="col-md-12">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-5"> <br>
                                            <label>Name</label>
                                        </div>
                                        <div class="form-group col-md-5"><br>
                                            <input type="text" class="form-control" name="username" value="jhon">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label>Gender</label>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label class="mr-sm-2 sr-only" for="inlineFormGenderSelect">Preference</label>
                                            <select class="custom-select mr-sm-2" id="inlineFormGenderSelect">
                                                <option selected>Choose...</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label>Date of Birth</label>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <input type="date" id="birthday" class="form-control" name="birthday">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label>Faculty</label>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <input type="text" class="form-control" name="faculty" value="Technological studies">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label>Degree Program</label>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <input type="text" class="form-control" name="d.program" value="ICT">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label>Email</label>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <input type="email" id ="email" class="form-control" name="e-mail" value="jhon@gmail.com">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label>Phone Number</label>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <input type="tel" class="form-control" name="p.number" value="1234567890">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label>Country</label>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <input type="text" class="form-control" name="country" value="Sri Lanka">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label>Description</label>
                                        </div>  
                                        <div class="form-group col-md-5"> 
                                            <textarea name="descrition" cols="67" rows="5">Enter your detail description...</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label></label>
                                        </div>
                                        <div class="col-md-5">
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                <button type="submit" class="btn-sm btn-primary" name="BtnAddMore">Update</button>
                                </div>  
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </form>           
    </div>
</div>

@endsection
