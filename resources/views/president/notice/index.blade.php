@extends('layouts.president')
@section('title', 'Notices')
@section('content')
    <div class="card card-default">
        <div class="card-header d-flex  justify-content-md-between justify-content-center p-4"
             style="background-color: #4c84ff !important">
            <div class="text-leftt text-white pb-1 pb-md-0">
                <h1>Notices</h1>
            </div>
            <div class="text-right">
                <a href="{{ route('president.notice.create') }}">
                    <button type="button" class="btn btn-success"><i
                            class="fa-light fa-plus"></i> Create A Notice
                    </button>
                </a>
                <button type="button" class="btn btn-secondary">Back</button>
            </div>
        </div>
        @if (!$notices->isEmpty())
        <div class="container-fluid mb-3">
            <div class="row">
                @foreach($notices as $notice)
                    <div class="col-lg-4 mt-3">
                        <div class="card shadow-sm p-2 bg-white rounded">
                            <div class="card-body p-0 p-2">
                                <div style="min-height: 25vh">
                                    <p class="card-text">{{$notice->notice}}</p>
                                </div>
                                <div class="text-right d-flex justify-content-end position-inherit">
                                    <a href="{{route('notice.publish')}}" class="pl-1">
                                        <button type="button" class="btn btn-success"><i
                                                class="fa-duotone fa-paper-plane-top mr-1"></i>Publish
                                        </button>
                                    </a>
                                    <a href="{{route('notice.edit', $notice->id)}}" class="pl-1">
                                        <button type="button" class="btn btn-dark"><i
                                                class="fa-duotone fa-pen-circle mr-1"></i>Edit
                                        </button>
                                    </a>
                                    <a href="#deleteModal" data-toggle="modal" class="pl-1">
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fa-duotone fa-circle-trash mr-1"></i>Delete
                                        </button>
                                    </a>
                                    <!-- Confirm Deletion Modal -->
                                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
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
                                                              action="{{ route('president.notice.destroy', $event->id) }}">
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
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @else
        <div class="d-flex justify-content-center flex-column align-items-center p-5" style="height: 61vh">
            <h1 class="text-center">
                {{ __('Create a Notice') }}</h1>
            <a href="{{ route('president.notice.create') }}"><i class="fa-solid fa-folder-plus fa-10x m-5"></i></a>
        </div>
    @endif
@endsection
