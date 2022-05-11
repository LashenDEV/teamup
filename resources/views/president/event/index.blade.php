@extends('layouts.president')
@section('title', 'Events')
@section('content')
    <div class="card card-default">
        <div class="card-header d-flex  justify-content-between p-3" style="background-color: #c3d4fa !important">
            <div class="text-leftt py-2">
                <h1>All Events</h1>
            </div>
            <div class="text-right py-2">
                <a href="{{ route('president.event.create') }}"><button type="button" class="btn btn-primary"><i
                            class="fa-light fa-plus"></i> Create An Event </button>
                </a>
                <button type="button" class="btn btn-secondary">Back</button>
                <div class="input-group pt-1">
                </div>
            </div>
        </div>

        <div class="card-body">

            <div class="card-deck">

                <div class="card shadow-sm p-3 bg-white rounded">
                    <img class="card-img-top" src="{{ asset('assets/images/auth/signin.jpg') }}" alt="Card image cap">
                    <div class="card-body p-2 ">
                        <h5 class="card-title text-primary">Event Name</h5>
                        <p class="card-text pb-3">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal height
                            action.</p>

                        <div class="text-right py-2">
                            <button type="button" class="btn btn-success">Publish</button>
                            <button type="button" class="btn btn-info">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>

                    </div>
                </div>

                <div class="card shadow-sm p-3 bg-white rounded">
                    <img class="card-img-top" src="{{ asset('assets/images/auth/singup.jpg') }}" alt="Card image cap">
                    <div class="card-body p-2">
                        <h5 class="card-title text-primary">Card Title</h5>
                        <p class="card-text pb-3">his is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer
                            content than the first to show that equal height action.</p>
                        <div class="text-right py-2">
                            <button type="button" class="btn btn-success">Publish</button>
                            <button type="button" class="btn btn-info">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm p-3 bg-white rounded">
                    <img class="card-img-top" src="{{ asset('assets/images/auth/singup.jpg') }}" alt="Card image cap">
                    <div class="card-body p-2">
                        <h5 class="card-title text-primary">Card Title</h5>
                        <p class="card-text pb-3">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer
                            content than the first to show that equal height action.</p>
                        <div class="text-right py-2">
                            <button type="button" class="btn btn-success">Publish</button>
                            <button type="button" class="btn btn-info">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>

                        </div>
                    </div>
                </div>
                <div class="input-group pt-5">

                    <div class="card shadow-sm p-3 bg-white rounded">
                        <img class="card-img-top" src="{{ asset('assets/images/auth/singup.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body p-2">
                            <h5 class="card-title text-primary">Card Title</h5>
                            <p class="card-text pb-3">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This card has even longer
                                content than the first to show that equal height action.</p>
                            <div class="text-right py-2">
                                <button type="button" class="btn btn-success">Publish</button>
                                <button type="button" class="btn btn-info">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm p-3 bg-white rounded">
                        <img class="card-img-top" src="{{ asset('assets/images/auth/singup.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body p-2">
                            <h5 class="card-title text-primary">Card Title</h5>
                            <p class="card-text pb-3">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This card has even longer
                                content than the first to show that equal height action.</p>
                            <div class="text-right py-2">
                                <button type="button" class="btn btn-success">Publish</button>
                                <button type="button" class="btn btn-info">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm p-3 bg-white rounded">
                        <img class="card-img-top" src="{{ asset('assets/images/auth/singup.jpg') }}"
                            alt="Card image cap">
                        <div class="card-body p-2">
                            <h5 class="card-title text-primary">Card Title</h5>
                            <p class="card-text pb-3">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This card has even longer
                                content than the first to show that equal height action.</p>
                            <div class="text-right py-2">
                                <button type="button" class="btn btn-success">Publish</button>
                                <button type="button" class="btn btn-info">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        @endsection
