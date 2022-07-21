@extends('layouts.president')
@section('title', 'dashboard')
@section('content')
    <div class="py-12 px-3 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mt-4 mb-4">
                    <h2>President Dashboard</h2>
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
                                        <i class="fa-duotone fa-users-line fa-5x text-primary"></i>
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
                                        <i class="fa-duotone fa-video fa-5x text-success"></i>
                                    </div>
                                    <div class="text-center d-flex flex-column justify-content-center">
                                        <p class="mb-1">Upcoming Meeting Count</p>
                                        <h1>{{$meeting_count ? : 0}}</h1>
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
                                        <h1>{{$new_members ? :0}}</h1>
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
                                        <i class="fa-duotone fa-circle-dollar fa-5x text-warning"></i>
                                    </div>
                                    <div class="text-center d-flex flex-column justify-content-center">
                                        <p class="mb-1">Total Revenue</p>
                                        <h1>{{$total_revenue ? :0}} $</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card card-table-border-none shadow bg-body rounded" id="recent-orders">
                            <div class="card-header justify-content-between">
                                <h2>Recent Registered Users</h2>
                            </div>
                            <div class="card-body pt-0 pb-5">
                                <table class="table card-table table-responsive table-responsive-large"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Registered Date</th>
                                        <th class="d-none d-md-table-cell">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($recent_members as $recent_member)
                                        <tr>
                                            <td>{{$recent_member->registeredUsers->id}}</td>
                                            <td>{{$recent_member->registeredUsers->name}}</td>
                                            <td>{{$recent_member->registeredUsers->created_at}}</td>
                                            <td class="d-none d-md-table-cell">
                                                <a href="#deleteModal_{{$recent_member->id}}" data-toggle="modal">
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fa-duotone fa-circle-trash mr-1"></i>Delete
                                                    </button>
                                                </a>
                                            </td>
                                            <!-- Confirm Deletion Modal -->
                                            <div class="modal fade" id="deleteModal_{{$recent_member->id}}"
                                                 tabindex="-1"
                                                 role="dialog"
                                                 aria-labelledby="deleteModalCenterTitle"
                                                 aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content text-center">
                                                        <div class="modal-body">
                                                            <i class="fa-thin fa-circle-xmark fa-10x text-danger"></i>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <div class="m-2">
                                                                <h2>Are you sure?</h2>
                                                                <p>Do you really want to delete these records? This
                                                                    process
                                                                    cannot be undone.</p>
                                                            </div>
                                                            <div class="modal-footer border-0 justify-content-center">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Cancel
                                                                </button>
                                                                <form method="POST"
                                                                      action="{{ route('president.members.destroy', $recent_member->id) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger"><i
                                                                            class="fa-solid fa-trash-can"></i>
                                                                        Delete
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Confirm Deletion Model -->
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
