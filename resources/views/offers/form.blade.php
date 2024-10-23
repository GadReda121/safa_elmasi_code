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
        <label for="price">@lang('trans.price')</label>
        {!! Form::number('price',null,[
        "class" => "form-control ".
        ($errors->has('price') ? ' is-invalid' : '')
        ,
        ]) !!}
        @error('price')
        @foreach ($errors->get('price') as $message)
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
    {{-- <div class="form-group col-6"> --}}
        {{-- <label for="type">@lang('trans.type')</label>
        {!! Form::select('type',
        \App\Enums\OfferTypeEnum::trans()
        ,
        null,
        [
        "class" => "form-control ".
        ($errors->has('type') ? ' is-invalid' : '')
        ,
        ]
        ) !!}
        @error('type')
        @foreach ($errors->get('type') as $message)
        <span class="text-danger">{{ $message }}</span>
        @endforeach
        @enderror
    </div> --}}
    <div class="form-group col-6">
        <label for="category_id">@lang('trans.category_id')</label>
        {!! Form::select('category_id',
        $categories
        ,
        null,
        [
        "class" => "form-control ". ($errors->has('category_id') ? ' is-invalid' : ''),
        ]
        ) !!}
        @error('category_id')
        @foreach ($errors->get('category_id') as $message)
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
    {{-- add button --}}
    <div class="form-group">
        <button class="btn btn-primary add_field_button"

        >

            <i class="la la-plus"></i>
        </button>
    </div>
    {{-- add muliple items in table --}}

    <div class="form-group col-12">
        <label for="items">@lang('trans.items')</label>

        <input type="file" name="items[]" class="form-control" multiple>
        @error('items')
        @foreach ($errors->get('items') as $message)
        <span class="text-danger">{{ $message }}</span>
        @endforeach
        @enderror
        <table class="table ">
            <thead>
                <tr>
                    <th>@lang('trans.name')</th>
                    <th>@lang('trans.price')</th>
                    <th>@lang('trans.delete')</th>
                </tr>
            </thead>

            <tbody class="input_fields_wrap">
                @if ($model->items)
                @foreach ($model->items as $item)
                <tr sytle=" width: 100px; height: 100px;">
                    <td>
                        <input type="text" name="items[{{ $item->id + 100 }}][name]" required value="{{ $item->name }}"
                            class="form-control">

                    </td>
                    <td>
                        <input type="number" name="items[{{ $item->id + 100 }}][price]" required value="{{ $item->price }}"
                            class="form-control">
                    </td>
                    <td>
                        <a href="#" class="btn btn-danger remove_field">Remove</a>
                    </td>

                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>



<button type="submit" class="btn btn-md bg-cyan text-light">
    <i class="la la-check-square-o"></i> @lang('trans.save')
</button>


</div>

@push('scripts')
<script>
    var x = 0;
    $('.add_field_button')
        .click(function (e) {
            e.preventDefault();
            var max_fields = 10;
                $('.input_fields_wrap').append(
                    '<tr sytle=" width: 100px; height: 100px;"> <td> <input required type="text" name="items['+x+'][name]" class="form-control"> </td> <td> <input required type="number" name="items['+x+'][price]" class="form-control"> </td> <td> <a href="#" class="btn btn-danger remove_field">Remove</a> </td> </tr>'
                );
                x++;

        });

    $('.input_fields_wrap').on('click', '.remove_field', function (e) {
        e.preventDefault();
        $(this).parent().parent().remove();
        x--;
    });
    // delete button
    $('.delete').click(function (e) {
        e.preventDefault();
        if (confirm('Are you sure you want to delete this item?')) {
            $(this).closest('form').submit();
        }
    });

</script>

@endpush
