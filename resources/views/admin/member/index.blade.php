@extends('layouts.admin')
@section('title', 'Members')
@section('content')
    <!-- Recent Order Table -->
    <div class="card card-table-border-none border-0">
        <div class="card-header d-flex flex-column flex-md-row justify-content-between p-4"
             style="background-color: #4c84ff !important">
            <div class="text-leftt text-white">
                <h1>All Members</h1>
            </div>
            <div class="text-right">
                <a href="{{route('admin.member.create')}}">
                    <button type="button" class="btn btn-success"><i
                            class="fa-light fa-plus"></i> Add Memeber
                    </button>
                </a>
                <a href="{{route('admin.dashboard')}}">
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
                    <th class="d-none d-md-table-cell">Email</th>
                    <th>Mobile</th>
                    <th class="d-none d-md-table-cell">Degree program</th>
                    <th class="d-none d-md-table-cell">Academic Year</th>
                    <th class="d-none d-md-table-cell">Address</th>
                    <th>Status</th>
                    <th class="d-none d-md-table-cell">Action</th>
                </tr>
                </thead>
                <tbody class="alldata">
                @foreach($members as $member)
                    <tr>
                        <td>{{$member->id}}</td>
                        <td>{{$member->name}}</td>
                        <td class="d-none d-md-table-cell">{{$member->email}}</td>
                        <td>{{$member->mobile}}</td>
                        <td class="d-none d-md-table-cell">{{$member->degree_program}}</td>
                        <td class="d-none d-md-table-cell">{{$member->year}}</td>
                        <td class="d-none d-md-table-cell">{{$member->address_line1,}} {{$member->address_line2,}} {{$member->city,}}
                            {{$member->province}}</td>
                        @if($member->email_verified_at)
                            <td><span class="badge badge-success">Verified</span></td>
                        @else
                            <td><span class="badge badge-danger">Not Verified</span></td>
                        @endif
                        <td class="d-none d-md-table-cell">
                            <a href="{{ route('admin.member.edit', $member->id) }}"
                               class="pl-1">
                                <button type="button" class="btn btn-dark"><i
                                        class="fa-duotone fa-pen-circle mr-1"></i>Edit
                                </button>
                            </a>
                            <a href="#deleteModal_{{$member->id}}" data-toggle="modal" class="pl-1">
                                <button type="submit" class="btn btn-danger"><i
                                        class="fa-duotone fa-circle-trash mr-1"></i>Delete
                                </button>
                            </a>
                        </td>
                        <!-- Confirm Deletion Modal -->
                        <div class="modal fade" id="deleteModal_{{$member->id}}" tabindex="-1" role="dialog"
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
                                            <p>Do you really want to delete these records? This process
                                                cannot be undone.</p>
                                        </div>
                                        <div class="modal-footer border-0 justify-content-center">
                                            <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel
                                            </button>
                                            <form method="POST"
                                                  action="{{ route('admin.member.destroy', $member->id) }}">
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
                <tbody id="Content" class="searcheddata">
                </tbody>
            </table>
            <span class="alldata">
                {{ $members->links('components.pagination') }}
                </span>
        </div>
    </div>
    <script type="text/javascript">
        $('#search').on('keyup', function () {
            $value = $(this).val();

            if ($value) {
                $('.alldata').hide();
                $('.searcheddata').show();
            } else {
                $('.alldata').show();
                $('.searcheddata').hide();
            }

            $.ajax({
                type: 'get',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: '{{URL::to('admin/member/search')}}',
                data: {'search': $value},

                success: function (data) {
                    $('#Content').html(data);
                }
            })
        })
    </script>
@endsection
