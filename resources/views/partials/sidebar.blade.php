<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        {{-- general --}}



        <ul class="navigation navigation-main mt-5" id="main-menu-navigation" data-menu="menu-navigation">


            @if(checkPermission('offers_read'))
            <li class="nav-item @if(\Str::contains(request()->route()->getName(), 'offers')) active @endif  ">
                <a class="menu-item" href="{{ route('offers.index') }}" data-i18n="nav.dash.ecommerce">
                    <i class="fa-solid fa-file" style="color:  #34A9AB;"></i>
                    <span>@lang('trans.offers') </span>
                </a>
            </li>
            @endif
            {{-- categories --}}
            @if(checkPermission('categories_read'))
            <li class="nav-item @if(\Str::contains(request()->route()->getName(), 'categories')) active @endif">
                <a class="menu-item" href="{{ route('categories.index') }}" data-i18n="nav.dash.ecommerce">
                    <i class="fa-solid fa-folder" style="color: #22637F;"></i>
                    <span>@lang('trans.categories')</span>
                </a>
            </li>
            @endif
            {{-- partners --}}
            @if(checkPermission('partners_read'))
            <li class="nav-item @if(\Str::contains(request()->route()->getName(), 'partners')) active @endif">
                <a class="menu-item" href="{{ route('partners.index') }}" data-i18n="nav.dash.ecommerce">
                    <i class="fa-solid fa-user" style="color:#34A9AD;"></i>
                    <span>@lang('trans.partners')</span>
                </a>
            </li>
            @endif
            @if(checkPermission('reservations_read'))
            <li class="nav-item @if(\Str::contains(request()->route()->getName(), 'reservations')) active @endif">
                <a class="menu-item" href="{{ route('reservations.index') }}" data-i18n="nav.dash.ecommerce">
                    <i class="fa-solid fa-calendar" style="color: #78CCC9;"></i>
                    <span>@lang('trans.reservations')</span>
                </a>
            </li>
            @endif
            {{-- users --}}


        </ul>


        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li
                class="nav-item
                @if(\Str::contains(request()->route()->getName(), 'jobs') || \Str::contains(request()->route()->getName(), 'countries')) has-sub open @endif">
                <a href="#"><i class="la la-cogs" style="color: #77b13f;"></i><span class="menu-title"
                        data-i18n="nav.dash.main">@lang('trans.general')</span></a>
                <ul class="menu-content">

                    @if(checkPermission('users_read'))

                    <li class="@if(\Str::contains(request()->route()->getName(), 'users') )
                        active
                        @endif">
                        <a class="menu-item" href="{{ route('users.index') }}"
                            data-i18n="nav.dash.ecommerce">@lang("trans.users")</a>
                    </li>
                    @endif
                    @if(checkPermission('roles_read'))
                    <li class="@if(\Str::contains(request()->route()->getName(), 'roles'))
                        active
                        @endif">
                        <a class="menu-item " href="{{ route('roles.index') }}"
                            data-i18n="nav.dash.ecommerce">@lang("trans.roles")</a>
                    </li>
                    @endif
                </ul>
            </li>

        </ul>


    </div>
</div>
