@extends('layouts.president')
@section('title', 'Manage Memebers')
@section('content')

<div class="card-header justify-content-between">
   <div class="d-flex justify-content-between">
        <div class="text-leftt py-2">
            <h1>Members</h1>
        </div>
        <div class="text-right py-2">
            <button type="button" class="btn btn-secondary">Back</button>
            <div class="input-group pt-1">
            </div>
        </div>
    </div>
</div>

<!-- Recent Order Table -->
<div class="card card-table-border-none" id="recent-orders">
  <div class="card-header justify-content-between">
 
  </div>
  <div class="card-body pt-0 pb-5">
    <table class="table card-table table-responsive table-responsive-large" style="width:100%">
      <thead>
        <tr>
          <th>Member ID</th>
          <th>Member Name</th>
          <th class="d-none d-md-table-cell">Degree program</th>
          <th class="d-none d-md-table-cell">Address</th>
          <th class="d-none d-md-table-cell">Year</th>
          <th>Status</th>
          <th>Action</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td >24541</td>
          <td >
            <a class="text-dark" href=""> Coach Swagger</a>
          </td>
          <td class="d-none d-md-table-cell">1 Unit</td>
          <td class="d-none d-md-table-cell">Oct 20, 2018</td>
          <td class="d-none d-md-table-cell">$230</td>
          <td >
            <span class="badge badge-success">Completed</span>
          </td>
          
        </tr>
        <tr>
          <td >24541</td>
          <td >
            <a class="text-dark" href=""> Toddler Shoes, Gucci Watch</a>
          </td>
          <td class="d-none d-md-table-cell">2 Units</td>
          <td class="d-none d-md-table-cell">Nov 15, 2018</td>
          <td class="d-none d-md-table-cell">$550</td>
          <td >
            <span class="badge badge-warning">Delayed</span>
          </td>
        </tr>
        <tr>
          <td >24541</td>
          <td >
            <a class="text-dark" href=""> Hat Black Suits</a>
          </td>
          <td class="d-none d-md-table-cell">1 Unit</td>
          <td class="d-none d-md-table-cell">Nov 18, 2018</td>
          <td class="d-none d-md-table-cell">$325</td>
          <td >
            <span class="badge badge-warning">On Hold</span>
          </td>
        </tr>
        <tr>
          <td >24541</td>
          <td >
            <a class="text-dark" href=""> Backpack Gents, Swimming Cap Slin</a>
          </td>
          <td class="d-none d-md-table-cell">5 Units</td>
          <td class="d-none d-md-table-cell">Dec 13, 2018</td>
          <td class="d-none d-md-table-cell">$200</td>
          <td >
            <span class="badge badge-success">Completed</span>
          </td>
        </tr>
        <tr>
          <td >24541</td>
          <td >
            <a class="text-dark" href=""> Speed 500 Ignite</a>
          </td>
          <td class="d-none d-md-table-cell">1 Unit</td>
          <td class="d-none d-md-table-cell">Dec 23, 2018</td>
          <td class="d-none d-md-table-cell">$150</td>
          <td >
            <span class="badge badge-danger">Cancelled</span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
