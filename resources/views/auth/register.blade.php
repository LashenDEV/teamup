@extends('layouts.auth')
@section('title', 'Register')
@section('content')

    <body class="bg-light-gray" id="body"
          style="background-image: url({{ asset('assets/images/auth/singup.jpg') }}); background-repeat: no-repeat; background-size: cover;">
    >
    <div class="container d-flex flex-column justify-content-between vh-100">
        <div class="row justify-content-end mt-5">
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="card border-0">
                    <div class="card-header bg-primary">
                        <div class="app-brand">
                            <a href="/index.html" class="pl-0">
                                <img src="{{ asset('assets/images/logos/teamup logo.png') }}" alt="">
                                <span class="brand-name">
                                        <h1>TeamUp</h1>
                                    </span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-5">
                        <h4 class="text-dark mb-3">Sign Up</h4>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <input type="text"
                                           class="form-control input-lg  @error('name') is-invalid @enderror" id="name"
                                           aria-describedby="nameHelp" placeholder="Name" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 mb-4">
                                    <input type="email"
                                           class="form-control input-lg @error('email') is-invalid @enderror" id="email"
                                           aria-describedby="emailHelp" placeholder="Email" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 ">
                                    <input type="password"
                                           class="form-control input-lg @error('password') is-invalid @enderror"
                                           name="password" required autocomplete="new-password" id="password"
                                           placeholder="Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 ">
                                    <input type="password" class="form-control input-lg" id="password-confirm"
                                           placeholder="Confirm Password" name="password_confirmation" required
                                           autocomplete="new-password">
                                </div>
                                <div class="col-md-12">
                                    <div class="d-inline-block mr-3">
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign Up</button>
                                    <p>Already have an account?
                                        <a class="text-blue" href="{{ route('login') }}">Sign in</a>
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
