@extends('layouts.member')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{ route('user.dashboard') }}">Home</a></li>
      </ol>
      <h2>Profile</h2>

    </div>
  </section><!-- End Breadcrumbs -->
    <div class="container">
      <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('dashboard') }}</div>
                        <h4>Hi User: {{ Auth::user()->name }}</h4>
                        <hr>
                        PROFILE
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
    
                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection
