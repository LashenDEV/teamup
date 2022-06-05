@extends('layouts.president')
@section('title', 'Manage Memebers')
@section('content')
    <!-- Recent Order Table -->
    <div class="card card-table-border-none" id="recent-orders">
        <div class="card-header d-flex flex-column flex-md-row justify-content-between p-4" style="background-color: #4c84ff !important">
            <div class="text-leftt text-white">
                <h1>All Members</h1>
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
                @foreach ($members as $member)
                    <tr>
                        <td>{{ $member->id }}</td>
                        <td>
                            <a class="text-dark" href="">{{ $member->name }}</a>
                        </td>
                        <td class="d-none d-md-table-cell">{{$member->mobile}}</td>
                        <td class="d-none d-md-table-cell">{{ $member->degree_program }}</td>
                        <td class="d-none d-md-table-cell">{{$member->year}}</td>
                        <td class="d-none d-md-table-cell w-25">{{$member->address_line_1}}, {{$member->address_line_2}}
                            , {{$member->city}}, {{$member->province}}</td>
                        <td>
                            <span class="badge badge-success">Approved</span>
                        </td>
                        <td class="d-flex justify-content-center">
                            <form action="{{ route('president.members.destroy', $member->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit"><i
                                        class="fa-duotone fa-trash text-danger"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $members->links('components.pagination') }}
        </div>
    </div>
@endsection
