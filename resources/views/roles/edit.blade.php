@extends('layouts.master')
@section('content')

<div class="content-body">
    <section id="basic-form-layouts">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="card">
                    {{-- cart header --}}
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-form-center"><a href="{{ route("clients.index") }}">@lang('trans.clients')</a>
                            /
                            @lang('trans.edit') </h4>

                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            {!! Form::model($model, ['route' => ['roles.update', $model->id], 'method' => 'put'
                            , 'enctype' => 'multipart/form-data'
                            ]) !!}
                            @include('roles.form')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>




@endsection
