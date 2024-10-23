<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-cyan navbar-shadow">    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row my-0">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img class="brand-logo" alt="{{ __('trans.way_protection') }}" src="{{ asset("app-assets/images/logo/logo.png") }}">
                        <h4 class="brand-text">@lang('trans.way_protection')</h4>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>

                </ul>
                <ul class="nav navbar-nav float-right">
                    {{-- notifications --}}
                    <li class="dropdown dropdown-notification nav-item">
                        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown" aria-expanded="false"><i class="ficon ft-bell"></i>
                            <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0">
                                    <span class="grey darken-2">الطلبات الجديده</span>
                                </h6>
                                {{-- <span class="notification-tag badge badge-default badge-danger float-right m-0">{{ }} جديد</span> --}}
                            </li>
                            <li class="scrollable-container media-list w-100 ps-container ps-theme-dark" data-ps-id="dc6b1477-425c-027d-ad66-22a2fc754585">

                                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
                                    <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps-scrollbar-y-rail" style="top: 0px; right: -8px;">
                                    <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    {{-- end notifications --}}
                    {{-- messages --}}
                    @php
                    $icon = 'gb';
                    if(LaravelLocalization::getCurrentLocale()== "ar")
                    $icon = "sa"
                    @endphp
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flag-icon flag-icon-{{ $icon }}">
                            </i><span class="selected-language"></span></a>

                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            @foreach(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            @php
                            $icon = 'gb';
                            if($localeCode == "ar")
                            $icon = "sa"
                            @endphp
                            <a class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"><i class="flag-icon flag-icon-{{ $icon }}"></i> {{ $properties['native'] }}</a>
                            @endforeach

                        </div>
                    </li>
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="mr-1">@lang('trans.hello'),
                                <span class="user-name text-bold-700">{{ auth()->user()->name }}</span>
                            </span>
                            <span class="avatar avatar-online">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i>
                            </span>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">
                                <a class="dropdown-item" href="{{ route('profile.index') }}"><i class="ft-user"></i>
                                    {{ auth()->user()->name }}</a>
                                <div class="dropdown-divider" id="logout"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();           document.getElementById('logout-form').submit();"><i class="ft-power"></i> @lang('trans.logout')</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</nav>
