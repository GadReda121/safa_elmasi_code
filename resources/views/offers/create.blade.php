@extends('layouts.master')
@section('title',__('trans.add'))
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('offers.index') }}" class=" text-decoration-none">
        @lang('trans.offers')</a></li>
<li class="breadcrumb-item"> {{ __('trans.add') }}</li>
@endsection
@section('content')
<section id="basic-form-layouts">
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        {!! Form::open(['route' => 'offers.store', 'method' => 'post',
                        'enctype' => 'multipart/form-data'
                        ]) !!}
                        @include('offers.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
