@extends('layouts.app')

@section('content')
<div class="container">
<div class="row d-flex justify-content-center">
        <div class=" vh-100 d-flex align-items-center mob">
            <div class="card bg-white col-xl-5 col-lg-7 col-md-8 m-auto">
                <!-- logo -->
                <div class="bg-white mt-3">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="logo"
                            style="width: 150px; height: 150px;"
                        />
                    </div>
                </div>
                <h2 class="text-center mt-4">{{ __('trans.Reset Password') }}</h2>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-2">
                            <div class="d-flex flex-column w-100">
                                <label for="email" class="col-md-4 col-form-label">{{ __('trans.email') }}</label>

                                <div>
                                    <input id="email" type="email" class="form-control bg-body-tertiary @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0 mt-3">
                            <div class="d-flex m-auto justify-content-center">
                                <button type="submit" class="btn btn-primary px-5 text-light border-0" style="background-color: #C93026;">
                                    {{ __('trans.Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
