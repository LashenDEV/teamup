@extends('layouts.admin')
@section('title', 'Presidents')
@section('content')
    <!-- Recent Order Table -->
    <div class="card card-table-border-none" id="recent-orders">
        <div class="card-header d-flex flex-column flex-md-row justify-content-between p-4"
             style="background-color: #4c84ff !important">
            <div class="text-leftt text-white">
                <h1>All Presidents</h1>
            </div>
            <div class="text-right">
                <a href="{{route('admin.president.create')}}">
                    <button type="button" class="btn btn-success"><i
                            class="fa-light fa-plus"></i> Add President
                    </button>
                </a>
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
                    <th>Club Name</th>
                    <th>Name</th>
                    <th class="d-none d-md-table-cell">Mobile</th>
                    <th class="d-none d-md-table-cell">Degree program</th>
                    <th class="d-none d-md-table-cell">Academic Year</th>
                    <th class="d-none d-md-table-cell">Address</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($presidents as $president)
                    <td>{{$president->id}}</td>
                    <td>{{$president->getClub->name}}</td>
                    <td>{{$president->name}}</td>
                    <td>{{$president->mobile}}</td>
                    <td>{{$president->degree_program}}</td>
                    <td>{{$president->year}}</td>
                    <td>{{$president->address_line1}}, {{$president->address_line2}}, {{$president->city}}
                        , {{$president->province}}</td>
                @endforeach
                </tbody>
            </table>
            {{ $presidents->links('components.pagination') }}

        </div>
    </div>
@endsection
