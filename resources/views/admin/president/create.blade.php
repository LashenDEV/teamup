@extends('layouts.admin')
@section('title', 'Add President')
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
           <form>
            <div class="form-group row">
                <div class="col-sm-12">
                <div class="form-group">
                <label for="exampleFormControlPassword">ID</label>
                <input type="password" class="form-control" id="exampleFormControlPassword" placeholder="Enter ID">
                </div>
            </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="fname">Club Name</label>
                        <input type="text" class="form-control" placeholder="Club name">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="fname">First name</label>
                        <input type="text" class="form-control" placeholder="John">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="lname">Last name</label>
                        <input type="text" class="form-control" placeholder="Smith">
                    </div>
                </div>
                
                <div class="col-sm-8">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Mobile</label>
                    <input type="tel" class="form-control" id="exampleFormControlInput1"
                           placeholder="Mobile number" name="mobile">
                </div>
            </div>
              
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="Degree">Degree Program</label>
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
                <label for="Year">Academic Year</label>
                <select class="form-control" id="exampleFormControlSelect12">
                    <option>First Year</option>
                    <option>Second Year</option>
                    <option>Third Year</option>
                    <option>Fourth Year</option>
                </select>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" placeholder="City Name">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="State">State</label>
                        <input type="text" class="form-control" placeholder="State">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="Zip">Zip</label>
                        <input type="text" class="form-control" placeholder="Zip">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-footer pt-5 border-top">
        <button type="submit" class="btn btn-primary btn-default">Submit</button>
        <button type="button" class="btn btn-secondary">Cancel</button>
    </div>
    
    </diV>
    </div>


           </form>
                </div>
        
@endsection
