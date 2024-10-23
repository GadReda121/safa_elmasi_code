@extends('layouts.master')

@section('title', __('trans.offers'))

@section('breadcrumb')
<li class="breadcrumb-item">
    @lang('trans.offers')
</li>
@endsection

@section('content')
<section>
    <div class="row">
        <div class="col-12">
            <div class="card p-1">
                <div class="card-header">
                    @if (checkPermission('offers_create'))
                    <h4 class="card-title">
                        <a class="btn btn-success" href="{{ route('offers.create') }}">
                            <i class="ft-plus"></i> @lang('trans.create_add')
                        </a>
                    </h4>
                    @endif
                </div>
                <div class="card-content collapse show overflow-auto mt-3">
                    <table
                        class="table border dataTable @if(app()->getLocale() == 'ar') table-hover @else table-striped responsive @endif text-nowrap">
                        <thead>
                            <tr>
                                <th>@lang('trans.name')</th>
                                <th>@lang('trans.price')</th>
                                <th>@lang('trans.status')</th>
                                <th>@lang('trans.image')</th>
                                <th>@lang('trans.created_at')</th>
                                <th>@lang('trans.actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($models as $client)
                            <tr>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->price }}</td>
                                <td>
                                    @if ($client->status == 'active')
                                    <span class="badge badge
                                    badge-success">@lang('trans.active')
                                    </span>
                                    @else
                                    <span class="badge badge
                                    badge-danger">@lang('trans.inactive')</span>
                                    @endif
                                </td>
                                <td>
                                    {{-- from media --}}
                                    <img src="{{ $client->
                                    getMedia('image')->first()->getUrl('webp_format')
                                    }}" alt="{{ $client->name }}" width="50" height="50">
                                </td>
                                <td>{{ $client->created_at->diffForHumans() }}</td>
                                <td>
                                    @if (checkPermission('offers_update'))
                                    <a href="{{ route('offers.edit', $client->id) }}"
                                        class="btn btn-info btn-sm">@lang('trans.edit')</a>
                                    @endif

                                    @if (checkPermission('offers_delete'))
                                    {!! Form::open(['route' => ['offers.destroy', $client->id], 'method' => 'delete',
                                    'style' => 'display:inline']) !!}
                                    {!! Form::button(__('trans.delete'), ['type' => 'submit', 'class' => 'btn btn-danger
                                    btn-sm delete']) !!}
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


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection

