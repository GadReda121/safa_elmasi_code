@extends('layouts.master')

@section('title', __('trans.partners'))

@section('breadcrumb')
<li class="breadcrumb-item">
    @lang('trans.partners')
</li>
@endsection

@section('content')
<section>
    <div class="row">
        <div class="col-12">
            <div class="card p-1">
                <div class="card-header">
                    @if (checkPermission('partners_create'))
                    <h4 class="card-title">
                        <a class="btn btn-success" href="{{ route('partners.create') }}">
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
                                    <img src="{{ $client->getFirstMediaUrl('image') }}" alt="{{ $client->name }}"
                                        width="50" height="50">
                                </td>
                                <td>{{ $client->created_at->diffForHumans() }}</td>
                                <td>
                                    @if (checkPermission('partners_update'))
                                    <a href="{{ route('partners.edit', $client->id) }}"
                                        class="btn btn-info btn-sm">@lang('trans.edit')</a>
                                    @endif

                                    @if (checkPermission('partners_delete'))
                                    {!! Form::open(['route' => ['partners.destroy', $client->id], 'method' => 'delete',
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

<!-- Add Client Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">@lang('trans.create_add')</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                {!! Form::open(['route' => 'partners.store', 'method' => 'post']) !!}
                <div class="form-body row">
                    <div class="form-group col-lg-6  ">
                        <label for="name"><strong> @lang('trans.name')</strong></label>
                        {!! Form::text('name',null,[
                        "class" => "form-control",
                        ]) !!}
                        @error('name')
                        @foreach ($errors->get('name') as $message)
                        <span class="text-danger">{{ $message }}</span>
                        @endforeach
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="email"><strong>@lang('trans.email')</strong></label>
                        {!! Form::text('email',null,[
                        "class" => "form-control",
                        'type' => 'email'

                        ]) !!}
                        @error('email')
                        @foreach ($errors->get('email') as $message)
                        <span class="text-danger">{{ $message }}</span>
                        @endforeach
                        @enderror
                    </div>
                    <div class="form-group  col-lg-6">
                        <label for="phone"><strong>@lang('trans.phone')</strong></label>
                        {!! Form::number('phone',null,[
                        "class" => "form-control",
                        ]) !!}
                        @error('phone')
                        @foreach ($errors->get('phone') as $message)
                        <span class="text-danger">{{ $message }}</span>
                        @endforeach
                        @enderror
                    </div>
                    <div class="form-group  col-lg-6">
                        <label for="name"><strong>@lang('trans.address')</strong></label>
                        {!! Form::text('address',null,[
                        "class" => "form-control",
                        ]) !!}
                        @error('address')
                        @foreach ($errors->get('address') as $message)
                        <span class="text-danger">{{ $message }}</span>
                        @endforeach
                        @enderror
                    </div>
                    <div class="form-group  col-lg-12">
                        <label for="notes"> <strong>@lang('trans.notes')</strong></label>
                        {!! Form::textarea('address',null,[
                        "class" => "form-control",
                        ]) !!}
                        @error('notes')
                        @foreach ($errors->get('notes') as $message)
                        <span class="text-danger">{{ $message }}</span>
                        @endforeach
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">@lang('trans.create_close')</button>
                    <button type="submit" class="btn btn-success"> <i
                            class="la la-check-square-o"></i>@lang('trans.save')</button>


                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
