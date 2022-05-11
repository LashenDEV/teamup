@extends('layouts.president')
@section('title', 'Manage Memebers')
@section('content')
    <!-- Recent Order Table -->
    <div class="card card-table-border-none" id="recent-orders">
        <div class="card-header d-flex  justify-content-between p-4" style="background-color: #4c84ff !important">
            <div class="text-leftt text-white">
                <h1>All Members</h1>
            </div>
            <div class="text-right">
                <button type="button" class="btn btn-secondary">Back</button>
            </div>
        </div>
        <div class="card-body pt-0 pb-5" style="min-height: 60vh">
            <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                <thead>
                    <tr>
                        <th>Member ID</th>
                        <th>Member Name</th>
                        <th class="d-none d-md-table-cell">Year</th>
                        <th class="d-none d-md-table-cell">Degree program</th>
                        <th class="d-none d-md-table-cell">Address</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>
                                <a class="text-dark" href="">{{ $member->name }}</a>
                            </td>
                            <td class="d-none d-md-table-cell">2019</td>
                            <td class="d-none d-md-table-cell">ICT</td>
                            <td class="d-none d-md-table-cell">No 189, Temple Road, Galle.</td>
                            <td>
                                <span class="badge badge-success">Completed</span>
                            </td>
                            <td class="d-flex">
                                <a href="{{ route('president.members.edit', $member->id) }}" class="px-1"><i
                                        class="fa-duotone fa-user-pen text-primary"></i></a>
                                <form action="{{ route('president.members.destroy', $member->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                  <button type="submit" class="px-1"><i
                                                class="fa-duotone fa-trash text-danger"></i></button></a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
