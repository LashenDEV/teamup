@extends('layouts.auth')

@section('content')

    <body class="bg-light-gray" id="body"
        style="background-image: url({{ asset('frontend/assets/img/auth/singup.jpg') }}); background-repeat: no-repeat; background-size: cover;">
        >
        <div class="container d-flex flex-column justify-content-between vh-100">
            <div class="row justify-content-end mt-5">
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="card border-0">
                        <div class="card-header bg-primary">
                            <div class="app-brand">
                                <a href="/index.html" class="pl-0">
                                    <img src="{{ asset('logos/teamup logo.png') }}" alt="">
                                    <span class="brand-name">
                                        <h1>Teamup</h1>
                                    </span>
                                </a>
                            </div>f
                        </div>
                        <div class="card-body p-5">
                            <h4 class="text-dark mb-5">Sign Up</h4>
                            <form action="/index.html">
                                <div class="row">
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="text" class="form-control input-lg" id="name"
                                            aria-describedby="nameHelp" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" class="form-control input-lg" id="email"
                                            aria-describedby="emailHelp" placeholder="Username">
                                    </div>
                                    <div class="form-group col-md-12 ">
                                        <input type="password" class="form-control input-lg" id="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-12 ">
                                        <input type="password" class="form-control input-lg" id="cpassword"
                                            placeholder="Confirm Password">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-inline-block mr-3">
                                            <label class="control control-checkbox">
                                                <input type="checkbox" />
                                                <div class="control-indicator"></div>
                                                I Agree the terms and conditions
                                            </label>

                                        </div>
                                        <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign Up</button>
                                        <p>Already have an account?
                                            <a class="text-blue" href="sign-in.html">Sign in</a>
                                        </p>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright pl-0">
                <p class="text-center">&copy; 2022 Copyright by @TeamUp
                </p>
            </div>
        </div>
    </body>
@endsection
