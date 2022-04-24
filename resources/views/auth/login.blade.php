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
                            <form action="/index.html">
                                <div class="row">
                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" class="form-control input-lg" id="email"
                                            aria-describedby="emailHelp" placeholder="Username">
                                    </div>
                                    <div class="form-group col-md-12 ">
                                        <input type="password" class="form-control input-lg" id="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex my-2 justify-content-between">
                                            <div class="d-inline-block mr-3">
                                                <label class="control control-checkbox">Remember me
                                                    <input type="checkbox" />
                                                    <div class="control-indicator"></div>
                                                </label>

                                            </div>
                                            <p><a class="text-blue" href="#">Forgot Your Passwords?</a></p>
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>
                                        <p>Don't have an account yet ?
                                            <a class="text-blue" href="sign-up.html">Sign Up</a>
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
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
