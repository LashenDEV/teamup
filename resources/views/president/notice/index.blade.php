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
    <div class="container-fluid mb-3">
        <div class="row">
            
                <div class="col-lg-4 mt-3">
                    <div class="card shadow-sm p-2 bg-white rounded">
                        <div class="card-body p-0 p-2">
                            <div style="min-height: 25vh">
                                <p class="card-text">Rotaract Club of University, which continues to speak through deeds, holds induction ceremonies throughout the year and welcomes new members to join the club and serve the community together.</p>
                            </div>
                            <div class="text-right d-flex justify-content-end position-inherit">
                                <a href="#" class="pl-1">
                                    <button type="button" class="btn btn-success"><i
                                            class="fa-duotone fa-paper-plane-top mr-1"></i>Publish
                                    </button>
                                </a>
                                <a href="" class="pl-1">
                                    <button type="button" class="btn btn-dark"><i
                                        class="fa-duotone fa-pen-circle mr-1"></i>Edit
                                    </button>
                                </a>
                                <a href="#deleteModal" data-toggle="modal" class="pl-1">
                                    <button type="submit" class="btn btn-danger"><i
                                        class="fa-duotone fa-circle-trash mr-1"></i>Delete
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-3">
                    <div class="card shadow-sm p-2 bg-white rounded">
                        <div class="card-body p-0 p-2">
                            <div style="min-height: 25vh">
                                <p class="card-text">The life-saving training camp run by the aqua club has been temporarily postponed</p>
                            </div>
                            <div class="text-right d-flex justify-content-end position-inherit">
                                <a href="#" class="pl-1">
                                    <button type="button" class="btn btn-success"><i
                                            class="fa-duotone fa-paper-plane-top mr-1"></i>Publish
                                    </button>
                                </a>
                                <a href="" class="pl-1">
                                    <button type="button" class="btn btn-dark"><i
                                            class="fa-duotone fa-pen-circle mr-1"></i>Edit
                                    </button>
                                </a>
                                <a href="#deleteModal" data-toggle="modal" class="pl-1">
                                    <button type="submit" class="btn btn-danger"><i
                                            class="fa-duotone fa-circle-trash mr-1"></i>Delete
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="card shadow-sm p-2 bg-white rounded">
                        <div class="card-body p-0 p-2">
                            <div style="min-height: 25vh">
                                <p class="card-text">The robofest competition, organized by the Information and Communication Technology Association, is set to take place this Sunday</p>
                            </div>
                            <div class="text-right d-flex justify-content-end position-inherit">
                                <a href="#" class="pl-1">
                                    <button type="button" class="btn btn-success"><i
                                            class="fa-duotone fa-paper-plane-top mr-1"></i>Publish
                                    </button>
                                </a>
                                <a href="" class="pl-1">
                                    <button type="button" class="btn btn-dark"><i
                                            class="fa-duotone fa-pen-circle mr-1"></i>Edit
                                    </button>
                                </a>
                                <a href="#deleteModal" data-toggle="modal" class="pl-1">
                                    <button type="submit" class="btn btn-danger"><i
                                            class="fa-duotone fa-circle-trash mr-1"></i>Delete
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                    
        </div>
    </div>

</div>
    
@endsection
