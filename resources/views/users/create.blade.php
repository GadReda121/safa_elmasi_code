@extends('layouts.master')
@section('title',__('trans.create_new'))
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route("users.index") }}"> @lang('trans.users')</a></li>
<li class="breadcrumb-item">@lang('trans.create')</li>
@endsection
@section('content')
<section id="basic-form-layouts">
    <div class="row justify-content-md-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content collapse show">
                    <div class="card-body">
                        {!! Form::open(['route' => 'users.store', 'method' => 'post',
                        'enctype' => 'multipart/form-data'
                        ]) !!}
                        @include('users.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
