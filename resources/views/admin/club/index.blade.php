@extends('layouts.admin')
@section('title', 'clubs')
@section('content')
<div class="card card-table-border-none border-0">
    <div class="card-header d-flex flex-column flex-md-row justify-content-between p-4"
         style="background-color: #4c84ff !important">
        <div class="text-leftt text-white">
            <h1>All Clubs</h1>
        </div>
        <div class="text-right">
            <a href="{{route('admin.club.create')}}">
                <button type="button" class="btn btn-success"><i
                        class="fa-light fa-plus"></i> Add Club
                </button>
            </a>
            <a href="{{route('admin.club.create')}}">
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
                <th>President Name</th>
                <th>Approve</th>
                <th class="d-none d-md-table-cell">Action</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <td>2</td>
                        <td>Art Club</td>
                        <td class="d-none d-md-table-cell">Lashen</td>
                
                        <td class="d-none d-md-table-cell"><a href="https://club-management-system.test/admin/president/2/edit" class="pl-1">
                            <button type="button" class="btn btn-primary"><i class="fa-duotone fa-circle-check"></i> Approve
                            </button>
                        </a>
                        <a href="#deleteModal" data-toggle="modal" class="pl-1">
                            <button type="submit" class="btn btn-danger"><i class="fa-duotone fa-circle-xmark"></i> Reject
                            </button>
                        </a>
                    </td>

                <td class="d-none d-md-table-cell"><a href="https://club-management-system.test/admin/president/2/edit" class="pl-1">
                    <button type="button" class="btn btn-dark"><i
                            class="fa-duotone fa-pen-circle mr-1"></i>Edit
                    </button>
                </a>
                <a href="#deleteModal" data-toggle="modal" class="pl-1">
                    <button type="submit" class="btn btn-danger"><i
                            class="fa-duotone fa-circle-trash mr-1"></i>Delete
                    </button>
                </a>
            </td>
            
            </tbody>
        </table>
@endsection
