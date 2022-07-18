@extends('layouts.admin')
@section('title', 'Statements')
@section('content')
    <div class="card card-table-border-none border-0">
        <div class="card-header d-flex flex-column flex-md-row justify-content-between p-4"
            style="background-color: #4c84ff !important">
            <div class="text-leftt text-white">
                <h1>TeamUp Statements</h1>
            </div>
            <div class="text-right">
                <a href="{{ url()->previous() }}">
                    <button type="button" class="btn btn-secondary">Back</button>
                </a>
            </div>
        </div>
        <div class="card-body pt-0 pb-5" style="min-height: 60vh">
            <div class="col-md-12 mt-3">
                @if ($statements->isNotEmpty())
                    @php($count = 0)
                    @foreach ($statements as $statement)
                        @if ($statement->title == 'welcome')
                            @php($count = 1)
                            <div class="card mb-3 shadow bg-body rounded">
                                <div class="card-body p-4">
                                    <form action="{{ route('admin.statement.update', $statement->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <input type="hidden" name="title" value="welcome">
                                            <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">

                                            <label for="statement" class="pb-1">
                                                <h3>Welcome Statement</h3>
                                            </label>
                                            <textarea class="form-control" id="statement" placeholder="Welcome Statement" rows="3" name="statement">{{ $statement->statement }}</textarea>
                                        </div>
                                        <div class="form-footer d-flex justify-content-end">
                                            <button type="submit" class="btn btn-warning btn-default">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    @if ($count != 1)
                        <div class="card mb-3 shadow bg-body rounded">
                            <div class="card-body p-4">
                                <form action="{{ route('admin.statement.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="title" value="welcome">
                                        <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">

                                        <label for="statement" class="pb-1">
                                            <h3>Welcome Statement</h3>
                                        </label>
                                        <textarea class="form-control" id="statement" placeholder="Welcome Statement" rows="3" name="statement"></textarea>
                                    </div>
                                    <div class="form-footer d-flex justify-content-end">
                                        <button type="submit" class="btn btn-success btn-default">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                    @php($count = 0)
                    @foreach ($statements as $statement)
                        @if ($statement->title == 'about')
                            @php($count = 1)
                            <div class="card mb-3 shadow bg-body rounded">
                                <div class="card-body p-4">
                                    <form action="{{ route('admin.statement.update', $statement->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <input type="hidden" name="title" value="about">
                                            <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">

                                            <label for="statement" class="pb-1">
                                                <h3>About Statement</h3>
                                            </label>
                                            <textarea class="form-control" id="statement" placeholder="About Statement" rows="3" name="statement">{{ $statement->statement }}</textarea>
                                        </div>
                                        <div class="form-footer d-flex justify-content-end">
                                            <button type="submit" class="btn btn-warning btn-default">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    @if ($count != 1)
                        <div class="card mb-3 shadow bg-body rounded">
                            <div class="card-body p-4">
                                <form action="{{ route('admin.statement.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="title" value="about">
                                        <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">

                                        <label for="statement" class="pb-1">
                                            <h3>About Statement</h3>
                                        </label>
                                        <textarea class="form-control" id="statement" placeholder="About Statement" rows="3" name="statement"></textarea>
                                    </div>
                                    <div class="form-footer d-flex justify-content-end">
                                        <button type="submit" class="btn btn-success btn-default">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                    @php($count = 0)
                    @foreach ($statements as $statement)
                        @if ($statement->title == 'mission')
                            @php($count = 1)
                            <div class="card mb-3 shadow bg-body rounded">
                                <div class="card-body p-4">
                                    <form action="{{ route('admin.statement.update', $statement->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <input type="hidden" name="title" value="mission">
                                            <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">

                                            <label for="statement" class="pb-1">
                                                <h3>Mission Statement</h3>
                                            </label>
                                            <textarea class="form-control" id="statement" placeholder="Mission Statement" rows="3" name="statement">{{ $statement->statement }}</textarea>
                                        </div>
                                        <div class="form-footer d-flex justify-content-end">
                                            <button type="submit" class="btn btn-warning btn-default">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    @if ($count != 1)
                        <div class="card mb-3 shadow bg-body rounded">
                            <div class="card-body p-4">
                                <form action="{{ route('admin.statement.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="title" value="mission">
                                        <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">

                                        <label for="statement" class="pb-1">
                                            <h3>Mission Statement</h3>
                                        </label>
                                        <textarea class="form-control" id="statement" placeholder="Mission Statement" rows="3" name="statement"></textarea>
                                    </div>
                                    <div class="form-footer d-flex justify-content-end">
                                        <button type="submit" class="btn btn-success btn-default">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                    @php($count = 0)
                    @foreach ($statements as $statement)
                        @if ($statement->title == 'plan')
                            @php($count = 1)
                            <div class="card mb-3 shadow bg-body rounded">
                                <div class="card-body p-4">
                                    <form action="{{ route('admin.statement.update', $statement->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <input type="hidden" name="title" value="plan">
                                            <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">

                                            <label for="statement" class="pb-1">
                                                <h3>Plan Statement</h3>
                                            </label>
                                            <textarea class="form-control" id="statement" placeholder="Plan Statement" rows="3" name="statement">{{ $statement->statement }}</textarea>
                                        </div>
                                        <div class="form-footer d-flex justify-content-end">
                                            <button type="submit" class="btn btn-warning btn-default">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    @if ($count != 1)
                        <div class="card mb-3 shadow bg-body rounded">
                            <div class="card-body p-4">
                                <form action="{{ route('admin.statement.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="title" value="plan">
                                        <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">

                                        <label for="statement" class="pb-1">
                                            <h3>Plan Statement</h3>
                                        </label>
                                        <textarea class="form-control" id="statement" placeholder="Plan Statement" rows="3" name="statement"></textarea>
                                    </div>
                                    <div class="form-footer d-flex justify-content-end">
                                        <button type="submit" class="btn btn-success btn-default">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                    @php($count = 0)
                    @foreach ($statements as $statement)
                        @if ($statement->title == 'vision')
                            @php($count = 1)
                            <div class="card mb-3 shadow bg-body rounded">
                                <div class="card-body p-4">
                                    <form action="{{ route('admin.statement.update', $statement->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <input type="hidden" name="title" value="vision">
                                            <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">

                                            <label for="statement" class="pb-1">
                                                <h3>Vision Statement</h3>
                                            </label>
                                            <textarea class="form-control" id="statement" placeholder="Vision Statement" rows="3" name="statement">{{ $statement->statement }}</textarea>
                                        </div>
                                        <div class="form-footer d-flex justify-content-end">
                                            <button type="submit" class="btn btn-warning btn-default">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    @if ($count != 1)
                        <div class="card mb-3 shadow bg-body rounded">
                            <div class="card-body p-4">
                                <form action="{{ route('admin.statement.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="title" value="vision">
                                        <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">

                                        <label for="statement" class="pb-1">
                                            <h3>Vision Statement</h3>
                                        </label>
                                        <textarea class="form-control" id="statement" placeholder="Vision Statement" rows="3" name="statement"></textarea>
                                    </div>
                                    <div class="form-footer d-flex justify-content-end">
                                        <button type="submit" class="btn btn-success btn-default">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="card mb-3 shadow bg-body rounded">
                        <div class="card-body p-4">
                            <form action="{{ route('admin.statement.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="title" value="welcome">
                                    <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">
                                    <label for="statement" class="pb-1">
                                        <h3>Welcome Statement</h3>
                                    </label>
                                    <textarea class="form-control" id="statement" placeholder="Welcome Statement" rows="3" name="statement"></textarea>
                                </div>
                                <div class="form-footer d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success btn-default">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-3 shadow bg-body rounded">
                        <div class="card-body p-4">
                            <form action="{{ route('admin.statement.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="title" value="about">
                                    <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">

                                    <label for="statement" class="pb-1">
                                        <h3>About Statement</h3>
                                    </label>
                                    <textarea class="form-control" id="statement" placeholder="About Statement" rows="3" name="statement"></textarea>
                                </div>
                                <div class="form-footer d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success btn-default">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-3 shadow bg-body rounded">
                        <div class="card-body p-4">
                            <form action="{{ route('admin.statement.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="title" value="mission">
                                    <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">
                                    <label for="statement" class="pb-1">
                                        <h3>Mission Statement</h3>
                                    </label>
                                    <textarea class="form-control" id="statement" placeholder="Mission Statement" rows="3" name="statement"></textarea>
                                </div>
                                <div class="form-footer d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success btn-default">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-3 shadow bg-body rounded">
                        <div class="card-body p-4">
                            <form action="{{ route('admin.statement.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="title" value="plan">
                                    <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">
                                    <label for="statement" class="pb-1">
                                        <h3>Plan Statement</h3>
                                    </label>
                                    <textarea class="form-control" id="statement" placeholder="Plan Statement" rows="3" name="statement"></textarea>
                                </div>
                                <div class="form-footer d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success btn-default">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-3 shadow bg-body rounded">
                        <div class="card-body p-4">
                            <form action="{{ route('admin.statement.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="title" value="vision">
                                    <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">
                                    <label for="statement" class="pb-1">
                                        <h3>Vision Statement</h3>
                                    </label>
                                    <textarea class="form-control" id="statement" placeholder="Vision Statement" rows="3" name="statement"></textarea>
                                </div>
                                <div class="form-footer d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success btn-default">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endsection
