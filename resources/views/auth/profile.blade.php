@extends('layouts.app')
@section('title')
@lang('trans.profile')
@endsection
@section('content')
<div class="container">
<div class="row d-flex justify-content-center">
        <div class=" vh-100 d-flex align-items-center mob">
            <div class="card bg-white col-xl-5 col-lg-7 col-md-8 m-auto">
                <!-- logo -->
                <div class="bg-white mt-3">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="logo" style="width: 150px; height: 150px;" />
                    </div>
                </div>
                <h2 class="text-center mt-4">{{ __('trans.update') }}</h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('user-profile.update') }}">
                        @csrf

                        <div class="row mb-2">
                            <div class="d-flex flex-column w-100">
                                <label for="name" class="col-md-4 col-form-label">{{ __('trans.name') }}</label>

                                <div>
                                    <input id="name" type="text" class="form-control bg-body-tertiary @error('name') is-invalid @enderror" name="name" value="{{ old('name') ? old('name') : auth()->user()->name}}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="d-flex flex-column w-100">
                                <label for="phone" class="col-md-4 col-form-label">{{ __('trans.phone') }}</label>
                                <div class="input-group">

                                    <input id="phone" type="number" class="form-control bg-body-tertiary @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') ?
                                    old('phone') : auth()->user()->phone
                                     }}" required autocomplete="phone" autofocus>
                                    <div class="input-group-prepend" style="margin: 0 7px 0 0;">
                                        <div class="input-group-text">+966</div>
                                    </div>
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="d-flex flex-column w-100">
                                <label for="email" class="col-md-4 col-form-label">{{ __('trans.email') }}</label>

                                <div>
                                    <input id="email" type="email" class="form-control bg-body-tertiary @error('email') is-invalid @enderror" name="email" value="{{ old('email')?old('email'):auth()->user()->email }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="d-flex flex-column w-100">
                                <label for="gender" class="col-md-4 col-form-label">{{ __('trans.gender') }}</label>

                                <div>
                                    <select class="form-control form-select bg-body-tertiary" name='gender'>
                                        <option value=''>اختر</option>
                                        <option value='male' @if(auth()->user()->gender == 'male')
                                            selected
                                            @endif
                                            >ذكر</option>
                                        <option value='female'
                                            @if(auth()->user()->gender == 'female')
                                            selected
                                            @endif
                                        >انثي</option>

                                    </select>
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="d-flex flex-column w-100">
                                <label for="password" class="col-md-4 col-form-label">{{ __('trans.password') }}</label>

                                <div>
                                    <input id="password" type="password" class="form-control bg-body-tertiary @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <input hidden value='user' name='type'>
                        <div class="row mb-2">
                            <div class="d-flex flex-column w-100">
                                <label for="password-confirm" class="col-md-4 col-form-label">{{ __('trans.password_confirmation') }}</label>
                                <div>
                                    <input id="password-confirm" type="password" class="form-control bg-body-tertiary" name="password_confirmation" autocomplete="new-password">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-1 mt-3">
                            <div class="d-flex m-auto justify-content-center">
                                <button type="submit" class="btn btn-primary px-5 text-light border-0" style="background-color: #C93026;">
                                    {{ __('trans.update') }}
                                    {{-- already have account login --}}
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

{{-- @push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .iti {
        width: 100%;
        display: block;
    }

</style>
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js" integrity="sha512-+gShyB8GWoOiXNwOlBaYXdLTiZt10Iy6xjACGadpqMs20aJOoh+PJt3bwUVA6Cefe7yF7vblX6QwyXZiVwTWGg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var inputMobile = document.getElementById("phone");
    if (inputMobile) {

        var itiMobile = window.intlTelInput(inputMobile, {
            separateDialCode: true
            , initialCountry: "auto"
            , utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"
            , geoIpLookup: function(callback) {
                callback('sa');
            }
            , nationalMode: true
                // , hiddenInput: "phone"
        , });
    }

</script>

@endpush --}}
