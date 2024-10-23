@extends('layouts.master')
@section('title',__('trans.add'))
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('partners.index') }}" class=" text-decoration-none">
        @lang('trans.partners')</a></li>
<li class="breadcrumb-item" style="background-color : #3AC2BC"> {{ __('trans.add') }}</li>
@endsection
@section('content')
<section id="basic-form-layouts">
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        {!! Form::open(['route' => 'partners.store', 'method' => 'post',
                        'enctype' => 'multipart/form-data'
                        ]) !!}
                        @include('partners.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
