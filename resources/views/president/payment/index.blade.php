@extends('layouts.president')
@section('title', 'Payments')
@section('content')

<div class="card card-table-border-none">
    <div class="card-header d-flex  justify-content-md-between justify-content-center p-4"
         style="background-color: #4c84ff !important">
        <div class="text-leftt text-white pb-1 pb-md-0">
            <h1>Payment</h1>
        </div>
        <div class="text-right">
            <a href="{{route('president.dashboard')}}">
                <button type="button" class="btn btn-secondary">Back</button>
            </a>
        </div>
    </div>

    <div class="card-body pt-0 pb-5" style="min-height: 60vh">
        <table class="table card-table table-responsive table-responsive-large" style="width:100%">
            <thead>
            <tr>
                <th>ID</th>
                <th class="d-none d-md-table-cell">Member ID</th>
                <th>Name</th>
                <th>Fee</th>               
                <th class="d-none d-md-table-cell">Reason</th>
                <th class="d-none d-md-table-cell">Due Date</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>           
@endsection