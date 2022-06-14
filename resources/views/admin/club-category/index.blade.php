@extends('layouts.admin')
@section('title', 'Club Category')
@section('content')
    <div class="card card-default">
        <div class="card-header d-flex  justify-content-md-between justify-content-center p-4"
            style="background-color: #4c84ff !important">
            <div class="text-leftt text-white pb-1 pb-md-0">
                <h1>All Club Categories</h1>
            </div>
            <div class="text-right">
                <a href="{{ route('admin.dashboard') }}"><button type="button"
                        class="btn btn-secondary">Back</button></a>
            </div>
        </div>
        <div class="container-fluid mb-3" style="min-height: 61vh">
            <div class="col-md-12 pt-3">
                <div class="row flex-column-reverse flex-md-row ">
                    <div class="col-md-8">
                        @if (!$club_categories->isEmpty())
                            @foreach ($club_categories as $club_category)
                                <div class="card mb-3">
                                    <div
                                        class="card-body d-flex justify-content-between align-items-center shadow p-3 bg-white rounded">
                                        <h3>{{ $club_category->category_name }}</h3>
                                        <div class="text-right py-2">
                                            <a class="btn p-0"
                                                href="{{ route('admin.category.edit', $club_category->id) }}">
                                                <i class="fa-duotone fa-pen-circle mr-1 text-primary fa-2x"></i>
                                            </a>
                                            <a class="btn p-0" href="#deleteModal" data-toggle="modal"
                                                class="pl-1">
                                                <i class="fa-duotone fa-circle-trash mr-1 text-danger fa-2x"></i>
                                            </a>
                                            <!-- Confirm Deletion Modal -->
                                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                                aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content text-center">
                                                        <div class="modal-body">
                                                            <i class="fa-thin fa-circle-xmark fa-10x text-danger"></i>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            <div class="m-2">
                                                                <h2>Are you sure?</h2>
                                                                <p>Do you really want to delete these records? This process
                                                                    cannot be undone.</p>
                                                            </div>
                                                            <div class="modal-footer border-0 justify-content-center">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cancel</button>
                                                                <form method="POST"
                                                                    action="{{ route('admin.category.destroy', $club_category->id) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger"><i
                                                                            class="fa-solid fa-trash-can"></i>
                                                                        Delete</button>
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
                            @endforeach
                            {{ $club_categories->links('components.pagination') }}
                        @else
                            <div class="d-flex justify-content-center flex-column align-items-center p-5">
                                <h1 class="text-center">{{ __('No Club Categories Have Created') }}</h1>
                                <i class="fa-duotone fa-face-frown fa-10x m-5"></i>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-4 px-2 pb-4">
                        <div class="card p-4 shadow p-3 bg-white rounded">
                            <h3>Create a Club Category</h3>
                            @if (Route::is('admin.category.edit'))
                                <form action="{{ route('admin.category.update', $club_category->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-gorup">
                                        <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">
                                        <label for="formGroupExampleInput" class="form-label mt-3">Category Name</label>
                                        <input type="text" class="form-control" name="category_name"
                                            value="{{ $club_category->category_name }}">
                                    </div>
                                    <div class="d-grid gap-2 d-flex justify-content-end mt-3">
                                        <button type="submit" class="btn btn-success">Create Club </button>
                                    </div>
                                </form>
                            @else
                                <form action="{{ route('admin.category.store') }}" method="POST">
                                    @csrf
                                    <div class="form-gorup">
                                        <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">
                                        <label for="formGroupExampleInput" class="form-label mt-3">Category Name</label>
                                        <input type="text" class="form-control" name="category_name">
                                    </div>
                                    <div class="d-grid gap-2 d-flex justify-content-end mt-3">
                                        <button type="submit" class="btn btn-success">Create</button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
