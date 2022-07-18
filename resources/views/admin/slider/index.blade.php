@extends('layouts.admin')
@section('title', 'Home Slider')
@section('content')
    <div class="card card-table-border-none border-0">
        <div class="card-header d-flex flex-column flex-md-row justify-content-between p-4"
            style="background-color: #4c84ff !important">
            <div class="text-leftt text-white">
                <h1>Home Slider</h1>
            </div>
            <div class="text-right">
                <a href="{{ url()->previous() }}">
                    <button type="button" class="btn btn-secondary">Back</button>
                </a>
            </div>
        </div>
        @if ($sliders->isNotEmpty())
        <div class="card-body pt-0 pb-5" style="min-height: 60vh">
            <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                <thead>
                    <th>ID</th>
                    <th>Club Name</th>
                    <th>Image</th>
                    <th class="d-none d-md-table-cell" style="width: 500px">Description</th>
                    <th class="d-none d-md-table-cell">Add to Home Slider</th>
                </thead>
                <tbody>
                    @foreach ($sliders as $slider)
                        <tr>
                            <td>{{ $slider->id }}</td>
                            <td>{{ $slider->name }}</td>
                            <td><img src="{{ asset($slider->image) }}" alt="" width="150px" height="100px"></td>
                            <td class="d-none d-md-table-cell">{{ $slider->description }}</td>
                            <td class="d-none d-md-table-cell">
                                <a href="{{ route('admin.slider.add', $slider->id) }}">
                                    <button type="button" class="btn btn-success">
                                        <i class="fa-duotone fa-circle-check"></i>
                                        Add
                                    </button>
                                </a>
                                <a href="{{ route('admin.slider.remove', $slider->id) }}" class="pl-1">
                                    <button type="submit" class="btn btn-danger"><i class="fa-duotone fa-circle-xmark"></i>
                                        Remove
                                    </button>
                                </a>
                            </td>
                            <td>
                                @if ($slider->home_slider_approval == 1)
                                    <span class="badge badge-success p-2">Added</span>
                            </td>
                        @elseif($slider->home_slider_approval == 0)
                            <span class="badge badge-danger p-2">Removed</span>
                        @else
                            <span class="badge badge-info p-2">Not Added Yet</span>
                    @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $sliders->links('components.pagination') }}
        </div>
        @else
        <div class="d-flex justify-content-center flex-column align-items-center p-5" style="height: 61vh">
            <h1 class="text-center">
                {{ __('Firstly Approve A Club') }}</h1>
            <a href="{{ route('admin.club.index') }}"><i class="fa-solid fa-folder-plus fa-10x m-5"></i></a>
        </div>
    @endif
    </div>
@endsection
