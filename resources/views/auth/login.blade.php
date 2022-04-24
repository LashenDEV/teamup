@extends('layouts.auth')
@section('title', 'Login')
@section('content')

    <body class="bg-light-gray" id="body"
        style="background-image: url({{ asset('frontend/assets/img/auth/signin.png') }}); background-repeat: no-repeat; background-size: cover;">
        <div class="container d-flex flex-column justify-content-between vh-100">
            <div class="row justify-content-end mt-5">
                <div class="col-xl-5 col-lg-6 col-md-10">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <div class="app-brand">
                                <a href="/index.html" class="pl-0">
                                    <img src="{{ asset('logos/teamup logo.png') }}" alt="">
                                    <span class="brand-name"> TeamUp</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body p-5">
                            <h4 class="text-dark mb-5">Sign In</h4>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email"
                                            class="form-control input-lg @error('email') is-invalid @enderror" id="email"
                                            aria-describedby="emailHelp" placeholder="Email" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-12 ">
                                        <input type="password"
                                            class="form-control input-lg @error('password') is-invalid @enderror"
                                            id="password" placeholder="Password" name="password" required
                                            autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex my-2 justify-content-between">
                                            <div class="d-inline-block mr-3">
                                                <label class="control control-checkbox">Remember me
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <div class="control-indicator"></div>
                                                </label>
                                            </div>
                                            <p>
                                                @if (Route::has('password.request'))
                                                    <a class="text-blue" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </p>
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>
                                        <p>Don't have an account yet ?
                                            <a class="text-blue" href="{{ route('register') }}">Sign Up</a>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright pl-0">
                <p class="text-center" >&copy; 2022 Copyright by @TeamUp
                </p>
            </div>
        </div>
    </body>
@endsection
