@section('title',__('trans.home'))


@extends('layouts.master')
@section('content')




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<style>
    canvas {
        width: 100% !important;
        height: auto !important;
    }

</style>


@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
@endpush

@endsection
