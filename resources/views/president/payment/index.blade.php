@extends('layouts.president')
@section('title', 'Payments')
@section('content')

    <div class="card card-table-border-none">
        <div class="card-header d-flex flex-column flex-md-row justify-content-between p-4"
             style="background-color: #4c84ff !important">
            <div class="text-leftt text-white">
                <h1>Payments</h1>
            </div>
            <div class="text-right">
                <a href="{{ url()->previous() }}">
                    <button type="button" class="btn btn-secondary">Back</button>
                </a>
            </div>
        </div>

        <div class="card-body pt-0 pb-5" style="min-height: 60vh">
            <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th class="d-none d-md-table-cell" width="12%">Member ID</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th class="d-none d-md-table-cell">Reason</th>
                    <th class="d-none d-md-table-cell">Date</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($payments as $payment)
                    <tr>
                        <td>{{$payment->id}}</td>
                        <td class="d-none d-md-table-cell">{{$payment->user_id}}</td>
                        <td>{{$payment->member->name}}</td>
                        <td>{{$payment->amount}} $</td>
                        <td class="d-none d-md-table-cell">{{$payment->description}}</td>
                        <td class="d-none d-md-table-cell">{{$payment->created_at}}</td>
                        @if($payment->payment_status == 'approved')
                            <td><span class="badge badge-success">Approved</span></td>
                        @else
                            <td><span class="badge badge-warning text-dark">Pending</span></td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $payments->links('components.pagination') }}
        </div>
@endsection
