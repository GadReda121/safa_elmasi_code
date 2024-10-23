@extends('layouts.master')
@section('content')

<div class="content-body">
    <section id="basic-form-layouts">
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="card">
                    {{-- cart header --}}
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-form-center">@lang('trans.edit_profile_info')</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            {!! Form::model(auth()->user(),[
                            "route" => ["profile.update", auth()->user()->id],
                            "method" => "put",
                            ]) !!}
                            @csrf
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="eventRegInput1">@lang('trans.name')</label>
                                    {!! Form::text('name',null,[
                                    "class" => "form-control",
                                    ]) !!}
                                </div>
                                {{-- email --}}
                                <div class="form-group">
                                    <label for="eventRegInput1"> @lang('trans.email')</label>
                                    {!! Form::email('email',null,[
                                    "class" => "form-control",
                                    ]) !!}

                                </div>
                                <div class="form-group">

                                    <label for="eventRegInput1"> @lang('trans.phone')</label>
                                    <div class="input-group">

                                        {!! Form::number('phone',null,[
                                        "class" => "form-control",
                                        ]) !!}
                                        <div class="input-group-prepend" style="margin: 0 7px 0 0;">
                                            <div class="input-group-text">+966</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- password and password confirmation --}}

                                <div class="form-group">
                                    <label for="my-input"> @lang("trans.password")</label>
                                    {!! Form::password('password',[
                                    "class" => "form-control",
                                    ]) !!}
                                </div>

                                <div class="form-group">
                                    <label for="my-input"> @lang('trans.password_confirmation')</label>
                                    {!! Form::password('password_confirmation',[
                                    "class" => "form-control",
                                    ]) !!}
                                </div>

                            </div>
                            <div>
                                <button type="submit" class="btn btn-md btn-success">
                                    <i class="la la-check-square-o"></i> @lang('trans.save')
                                </button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>




@endsection
