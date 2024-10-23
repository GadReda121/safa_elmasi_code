@include('partials.header')
@include('partials.nav')
@include('sweetalert::alert')

@include('partials.sidebar')

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <h3 class="content-header-title m-0 py-2 fw-semibold">@yield('title')</h3>
            <div class="content-header-left d-flex justify-content-between  col-12 mb-2 py-2 rounded align-items-center">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}" class=" text-decoration-none mx-2"> @lang('trans.home')</a>

                                     @yield('breadcrumb')

                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>

@include('partials.footer')
