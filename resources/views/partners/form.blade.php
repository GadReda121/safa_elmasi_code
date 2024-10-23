<div class="form-body row ">
    <div class="form-group col-6">
        <label for="name"> @lang('trans.name')</label>
        {!! Form::text('name',null,[
        "class" => "form-control "
        .
        ($errors->has('name') ? ' is-invalid' : '')
        ,
        ]) !!}
        @error('name')
        @foreach ($errors->get('name') as $message)
        <span class="text-danger">{{ $message }}</span>
        @endforeach
        @enderror
    </div>

    <div class="form-group col-6">
        <label for="status">@lang('trans.status')</label>
        {!! Form::select('status',
        [
        'active' => __('trans.active'),
        'inactive' => __('trans.inactive')
        ]
        ,
        null,
        [
        "class" => "form-control ".
        ($errors->has('status') ? ' is-invalid' : '')
        ,
        ]
        ) !!}
        @error('status')
        @foreach ($errors->get('status') as $message)
        <span class="text-danger">{{ $message }}</span>
        @endforeach
        @enderror
    </div>

    <div class="form-group col-6 ">
        <label for="name" class="form-label"> @lang('trans.image')</label>
        <br>
        {!! Form::file('image',null,[
        "class" => "form-control " .
        ($errors->has('image') ? ' is-invalid' : '')
        ,
        'type' => 'file',
        'accept' =>
        'image/*'


        ]) !!}
        <br>
        @error('image')
        @foreach ($errors->get('image') as $message)
        <span class="text-danger">{{ $message }}</span>
        @endforeach
        @enderror
    </div>
    {{-- if model has media image show it --}}
    @if( $model->getFirstMediaUrl('image'))
    <div class="form-group col-6">
        <img src="{{ $model->getFirstMediaUrl('image') }}" class="img-fluid" alt="">
    </div>
    @endif

</div>



<button type="submit" class="btn btn-md btn-success">
    <i class="la la-check-square-o"></i> @lang('trans.save')
</button>


</div>
