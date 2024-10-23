<div class="form-body">
    <div class="form-group">
        <label for="name"> @lang('trans.name')</label>
        {!! Form::text('name',null,[
        "class" => "form-control",
        ]) !!}
        @error('name')
        @foreach ($errors->get('name') as $message)
        <span class="text-danger">{{ $message }}</span>
        @endforeach
        @enderror
    </div>
    <div class="form-group">
        <label for="word"> @lang('trans.word')</label>
        {!! Form::textarea('word',null,[
        "class" => "form-control",
        ]) !!}
        @error('word')
        @foreach ($errors->get('word') as $message)
        <span class="text-danger">{{ $message }}</span>
        @endforeach
        @enderror
    </div>
    <div class="form-group">
        <label for="word"> @lang('trans.pixel_script')</label>
        {!! Form::textarea('pixel_script',null,[
        "class" => "form-control",
        ]) !!}
        @error('pixel_script')
        @foreach ($errors->get('pixel_script') as $message)
        <span class="text-danger">{{ $message }}</span>
        @endforeach
        @enderror
    </div>

    {{-- image --}}
    <div class="form-group">
        <label for="image">
            @lang('trans.image')
        </label>
        <input type="file" name="image" class="form-control bg-body-tertiary">

        @error('image')
        @foreach ($errors->get('image') as $message)
        <span class="text-danger">{{ $message }}</span>
        @endforeach
        @enderror
    </div>
    {{-- show image form media thumbnail --}}
    @if ($model
    ->getMedia('thumbnail')
    ->count() > 0

    )
    <div class="form-group">
        <img src="{{ $model->getMedia('thumbnail')[0]->getUrl() }}" alt="" style="width: 100px; height: 100px;">
    </div>

    @endif




    <button type="submit" class="btn btn-md btn-success mt-2">
        <i class="la la-check-square-o"></i> @lang('trans.save')
    </button>


</div>
