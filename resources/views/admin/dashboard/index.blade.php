@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')
    <div class="py-12 px-3 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mt-4 mb-4">
                    <h2>Admin Dashboard</h2>
                    <a href="/">
                        <button class="btn btn-outline-secondary">view site</button>
                    </a>
                </div>
                <div class="row mt-4">
                    <div class="col-xl-3 col-sm-6">
                        <div class="card card-mini mb-4 shadow bg-body rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-around">
                                    <div class="p-4">
                                        <i class="fa-duotone fa-user-tie fa-5x text-primary"></i>
                                    </div>
                                    <div class="text-center d-flex flex-column justify-content-center">
                                        <p class="mb-1">Total President Count</p>
                                        <h1>{{$president_count ? : 0}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card card-mini mb-4 shadow bg-body rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-around">
                                    <div class="p-4">
                                        <i class="fa-duotone fa-users-line fa-5x text-warning"></i>
                                    </div>
                                    <div class="text-center d-flex flex-column justify-content-center">
                                        <p class="mb-1">Total Members Count</p>
                                        <h1>{{$member_count ? : 0}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card card-mini mb-4 shadow bg-body rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-around">
                                    <div class="p-4">
                                        <i class="fa-duotone fa-object-exclude fa-5x text-success"></i>
                                    </div>
                                    <div class="text-center d-flex flex-column justify-content-center">
                                        <p class="mb-1">Total Clubs Count</p>
                                        <h1>{{$club_count ? : 0}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="card card-mini mb-4 shadow bg-body rounded">
                            <div class="card-body">
                                <div class="d-flex justify-content-around">
                                    <div class="p-4">
                                        <i class="fa-duotone fa-user-tie fa-5x"></i>
                                    </div>
                                    <div class="text-center d-flex flex-column justify-content-center">
                                        <p class="mb-1">New Members This Month</p>
                                        <h1>{{$new_members ? : 0}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <!-- Recently created clubs Table -->
                        <div class="card card-table-border-none shadow bg-body rounded" id="recent-orders">
                            <div class="card-header justify-content-between">
                                <h2>Recent Club Status</h2>
                            </div>
                            <div class="card-body pt-0 pb-5">
                                <table class="table card-table table-responsive table-responsive-large"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th class="d-none d-md-table-cell">Created Date</th>
                                        <th class="d-none d-md-table-cell">Category</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($recent_clubs as $recent_club)
                                        <tr>
                                            <td>{{$recent_club->id}}</td>
                                            <td>{{$recent_club->name}}</td>
                                            <td>{{$recent_club->created_at}}</td>
                                            <td>{{$recent_club->category_name}}</td>
                                            <td>@if($recent_club->approval == 1)
                                                    <span class="badge badge-success">Approved</span>
                                                @elseif($recent_club->approval == 0)
                                                    <span class="badge badge-danger">Rejected</span>
                                                @else
                                                    <span class="badge badge-warning">Pending</span>
                                                @endif
                                            </td>
                                            <td class="d-none d-md-table-cell">
                                                <a href="{{ route('admin.club.approval', $recent_club->id) }}">
                                                    <button type="button" class="btn btn-success"><i
                                                            class="fa-duotone fa-circle-check"></i>
                                                        Approve
                                                    </button>
                                                </a>
                                                <a href="{{ route('admin.club.rejection', $recent_club->id) }}"
                                                   class="pl-1">
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fa-duotone fa-circle-xmark"></i>
                                                        Reject
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
