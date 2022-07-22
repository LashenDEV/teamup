@extends('layouts.president')
@section('title', 'Manage Memebers')
@section('content')
    <!-- Recent Order Table -->
    <div class="card card-table-border-none" id="recent-orders">
        <div class="card-header d-flex flex-column flex-md-row justify-content-between p-4"
             style="background-color: #4c84ff !important">
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
                <tbody class="alldata">
                @foreach ($members as $member)
                    <tr>
                        <td>{{ $member->id }}</td>
                        <td>
                            <a class="text-dark" href="">{{ $member->registeredUsers->name }}</a>
                        </td>
                        <td class="d-none d-md-table-cell">{{$member->registeredUsers->mobile}}</td>
                        <td class="d-none d-md-table-cell">{{ $member->registeredUsers->degree_program }}</td>
                        <td class="d-none d-md-table-cell">{{$member->registeredUsers->year}}</td>
                        <td class="d-none d-md-table-cell w-25">{{$member->registeredUsers->address_line_1}}, {{$member->registeredUsers->address_line_2}}
                            , {{$member->registeredUsers->city}}, {{$member->registeredUsers->province}}</td>
                        <td>
                            <span class="badge badge-success">Approved</span>
                        </td>
                        <td class="d-flex justify-content-center">
                            <a href="#deleteModal_{{$member->user_id}}" data-toggle="modal" class="pl-1">
                                <button type="submit" class="btn btn-danger"><i
                                        class="fa-duotone fa-circle-trash mr-1"></i>Delete
                                </button>
                            </a>
                        </td>
                        <!-- Confirm Deletion Modal -->
                        <div class="modal fade" id="deleteModal_{{$member->user_id}}" tabindex="-1" role="dialog"
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
                                                  action="{{ route('president.members.destroy', $member->user_id) }}">
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
        $('#search-input').on('keyup', function () {
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
                url: '{{URL::to('president/member/search')}}',
                data: {'search': $value},

                success: function (data) {
                    $('#Content').html(data);
                }
            })
        })
    </script>
@endsection
