@extends('layouts.master')
@section('title',__('trans.categories'))
@section('breadcrumb')
<li class="breadcrumb-item">
    @lang('trans.categories')
</li>
@endsection
@section('content')
<section>
    <div class="row">
        <div class="col-12">
            <div class="card p-1">
                <div class="card-header">
                    @if(checkPermission('categories_create'))
                    <h4 class="card-title">
                        <a href="{{ route('categories.create') }}" class="btn btn-md btn-success"><i class="ft-plus"></i> @lang('trans.add')</a>
                    </h4>
                    @endif

                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">

                    </div>
                </div>
                <div class="card-content collapse show">
                <table class="table border dataTable table-striped @if(app()->getLocale() == 'ar')   table-hover @else table-striped  responsive @endif ">

                        <thead>
                            <th>@lang('trans.name')</th>
                            <th>@lang('trans.email')</th>
                            <th>@lang('trans.created_at') </th>
                            <th>@lang('trans.actions') </th>
                        </thead>
                        <tbody>
                            @foreach ($models as $client)
                            <tr>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $client->created_at->diffForHumans() }}</td>
                                <td>
                                    @if(checkPermission('categories_update'))
                                    <a href=" {{ route('categories.edit', $client->id) }}" class="btn  btn-info btn-md"><i class="ft-edit"></i></a>
                                    @endif
                                    @if(checkPermission('categories_delete'))
                                    {!! Form::open(['route' => ['categories.destroy', $client->id], 'method' => 'delete', 'style' => 'display:inline' ,
                                    ]) !!}
                                    {!! Form::button('<i class="ft-trash"></i>{{ __("lang.delete") }}', ['type' => 'submit', 'class' => 'btn btn-danger btn-md delete']) !!}
                                    {!! Form::close() !!}
                                    @endif


                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
