@extends('layouts.app')
@section('title')
    | @lang('trans.login')
@endsection

@section('content')
<div class="position-absolute top-0 start-0 end-0" style="transform: rotate(-180deg);">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#eee" fill-opacity="1" d="M0,160L48,149.3C96,139,192,117,288,133.3C384,149,480,203,576,186.7C672,171,768,85,864,48C960,11,1056,21,1152,48C1248,75,1344,117,1392,138.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</div>
<div class="position-absolute bottom-0 start-0 end-0">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#eee" fill-opacity="1" d="M0,160L48,149.3C96,139,192,117,288,133.3C384,149,480,203,576,186.7C672,171,768,85,864,48C960,11,1056,21,1152,48C1248,75,1344,117,1392,138.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
</div>

<div class="container">
    <div class="row justify-content-center">
        <!-- Login Form (Initially Hidden) -->
        <div class="vh-100 d-flex align-items-center mob">
            <div id="loginForm" class="card bg-white col-xl-5 col-lg-7 col-md-8 m-auto">
                <div class="bg-white mt-3">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="logo" style="width: 150px; height: 150px;" />
                    </div>
                </div>

                <h2 class="text-center mt-4 fw-bold">{{ __('trans.login') }}</h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Input -->
                        <div class="row mb-2">
                            <div class="d-flex flex-column w-100">
                                <label for="email" class="col-md-4 col-form-label">{{ __('trans.email') }}</label>
                                <div class="input-group">
                                    <input id="email" type="email" class="form-control bg-body-tertiary @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Password Input -->
                        <div class="row mb-2">
                            <div class="d-flex flex-column w-100">
                                <label for="password" class="col-md-4 col-form-label">{{ __('trans.password') }}</label>
                                <div>
                                    <input id="password" type="password" class="form-control bg-body-tertiary @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Remember Me Checkbox and Forgot Password Link -->
                        <div class="row mb-2 mt-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input bg-body-tertiary" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('trans.remember_me') }}
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #51a2a5;">
                                    {{ __('trans.Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>

                        <!-- Login Button and Register Link -->
                        <div class="row mb-0">
                            <div class="d-flex m-auto justify-content-center">
                                <button type="submit" class="btn btn-primary px-5 text-light border-0" style="background-color: #51a2a5;">
                                    {{ __('trans.login') }}
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

@push('scripts')
<script>
    function showLoginForm(loginRoute) {
        // Hide the registration cards
        document.getElementById('employeeCard').style.display = 'none';
        document.getElementById('customerCard').style.display = 'none';
        // Show the login form
        document.getElementById('loginForm').style.display = 'block';
        // Modify the login form action route
        document.getElementById('loginForm').querySelector('form').action = loginRoute;
        // Hide specific elements
        document.querySelector('.col-md-10').classList.add('d-none');
        // Show the mobile version
        document.querySelector('.mob').classList.remove('d-none');
    }
</script>
@endpush
