@extends('layouts.admin')
@section('title', 'History Logs')
@section('content')
    <div class="card card-table-border-none border-0">
        <div class="card-header d-flex flex-column flex-md-row justify-content-between p-4"
             style="background-color: #4c84ff !important">
            <div class="text-left text-white">
                <h1>History Logs</h1>
            </div>
            <div class="text-right">
                <a href="{{url()->previous() == 'https://teamup.test/admin/dashboard' ? route('admin.dashboard') : url()->previous()}}">
                    <button type="button" class="btn btn-secondary">Back</button>
                </a>
            </div>
        </div>
        <div class="col-md-12 pt-3 bg-white">
            <div class="col-md-12 pt-3 bg-white" style="min-height: 60vh">
                @if(!$history_logs->isEmpty())
                    @foreach($history_logs as $history_log)
                        <div class="card mb-2">
                            <div
                                class="card-body d-flex justify-content-between align-items-center shadow p-3 bg-white">
                                <h5 class="font-weight-light">
                                    <i class="fa-light fa-clock-rotate-left pr-2"></i>
                                    {{$history_log->description}}
                                </h5>
                                <div class="text-right py-2 d-flex">
                                    <h6 class="font-weight-light pr-2">
                                        {{\Carbon\Carbon::parse($history_log->created_at)->diffForHumans()}}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="bg-white" style="min-height: 60vh"></div>
                @endif
            </div>
            {{ $history_logs->links('components.pagination') }}
        </div>
    </div>
@endsection
