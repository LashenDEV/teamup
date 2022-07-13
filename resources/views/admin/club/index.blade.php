@extends('layouts.admin')
@section('title', 'All Clubs')
@section('content')
    <div class="card card-table-border-none border-0">
        <div class="card-header d-flex flex-column flex-md-row justify-content-between p-4"
             style="background-color: #4c84ff !important">
            <div class="text-leftt text-white">
                <h1>All Clubs</h1>
            </div>
            <div class="text-right">
                <a href="{{ route('admin.dashboard') }}">
                    <button type="button" class="btn btn-secondary">Back</button>
                </a>
            </div>
        </div>
        <div class="card-body pt-0 pb-5" style="min-height: 60vh">
            <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                <thead>
                <th>ID</th>
                <th>Club Name</th>
                <th>President Name</th>
                <th class="w-25">Approval</th>
                <th></th>
                <th class="d-none d-md-table-cell">Action</th>
                <th></th>
                </thead>
                <tbody class="alldata">
                @foreach ($clubs as $club)
                    <tr>
                        <td>{{ $club->id }}</td>
                        <td>{{ $club->name }}</td>
                        <td>{{$club->clubOwner->name}}</td>
                        <td class="d-none d-md-table-cell">
                            <a href="{{ route('admin.club.approval', $club->id) }}">
                                <button type="button" class="btn btn-success"><i class="fa-duotone fa-circle-check"></i>
                                    Approve
                                </button>
                            </a>
                            <a href="{{ route('admin.club.rejection', $club->id) }}" class="pl-1">
                                <button type="submit" class="btn btn-danger"><i class="fa-duotone fa-circle-xmark"></i>
                                    Reject
                                </button>
                            </a>
                        </td>
                        <td>
                            @if ($club->approval == 1)
                                <span class="badge badge-success p-2">Approved</span>
                        </td>
                        @elseif($club->approval == null)
                            <span class="badge badge-warning p-2">Pending</span>
                        @else
                            <span class="badge badge-danger p-2">Rejected</span>
                        @endif
                        <td class="d-none d-md-table-cell">
                            <a href="#deleteModal_{{$club->id}}" data-toggle="modal">
                                <button type="submit" class="btn"><i
                                        class="fa-duotone fa-circle-trash mr-1 text-danger fa-2x"></i>
                                </button>
                            </a>
                            <!-- Confirm Deletion Modal -->
                            <div class="modal fade" id="deleteModal_{{$club->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
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
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Cancel
                                                </button>
                                                <form method="POST" action="{{route('admin.club.destroy', $club->id)}}">
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
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tbody id="Content" class="searcheddata">
                </tbody>
            </table>
            <span class="alldata">
                {{ $clubs->links('components.pagination') }}
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
                url: '{{URL::to('admin/club/search')}}',
                data: {'search': $value},

                success: function (data) {
                    $('#Content').html(data);
                }
            })
        })
    </script>
@endsection
