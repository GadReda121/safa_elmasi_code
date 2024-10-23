<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="ar" />
    <meta http-equiv="content-script-type" content="text/javascript" />
    <meta http-equiv="content-style-type" content="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="الايادي البيضاء للرعاية الطبية />
    <meta name=" description" content="الايادي البيضاء للرعاية الطبية />
    <meta name=" keywords"
        content="الايادي البيضاء للرعاية الطبية, عيادات الايادي البيضاء للرعاية الطبية, الايادي البيضاء للرعاية الطبية, الايادي البيضاء للرعاية الطبية الرياض, الايادي البيضاء للرعاية الطبية السعودية, الايادي البيضاء للرعاية الطبية الرياض السعودية" />
    <!-- !More Meta -->
    <meta name="theme-color" content="#137570" />
    <meta name="msapplication-navbutton-color" content="#137570" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#137570" />
    <meta name="msapplication-TileColor" content="#137570" />
    <meta name="msapplication-TileImage" content="{{ asset('frontend/images/logo.png') }}" />
    <meta name="application-name" content="عيادات الايادي البيضاء للرعاية الطبية />
    <meta name=" msapplication-tooltip" content="عيادات الايادي البيضاء للرعاية الطبية />
    <meta name=" msapplication-starturl" content="/" />
    <meta name="msapplication-window" content="width=800;height=600" />
    <meta name="msapplication-task"
        content="name=عيادات الايادي البيضاء للرعاية الطبية;action-uri=/;icon-uri=/{{ asset('frontend/images/logo.png') }}" />
    <!-- !iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="عيادات الايادي البيضاء للرعاية الطبية />
    <meta name=" apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <!-- !Open Graph -->
    <meta property="og:title" content="عيادات الايادي البيضاء للرعاية الطبية />
    <meta property=" og:description" content="الثقة العربية - الصفحة الرئيسية" />
    <meta property="og:image" content="{{ asset('frontend/images/logo.png') }}" />
    <meta property="og:url" content="https://reservations.safaalmassiclinic.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="عيادات الايادي البيضاء للرعاية الطبية />
    <meta property=" og:locale" content="ar_SA" />
    <meta property="og:locale:alternate" content="en_GB" />
    <!-- !Twitter -->
    <meta name="twitter:card" content="للخدمات التسويقية والتقنية" />
    <meta name="twitter:site" content="@safadiamond" />
    <meta name="twitter:creator" content="@safadiamond" />
    <meta name="twitter:title" content="عيادات الايادي البيضاء للرعاية الطبية />
    <meta name=" twitter:description" content="عيادات الايادي البيضاء للرعاية الطبية />
    <meta name=" twitter:image" content="{{ asset('frontend/images/logo.png') }}" />
    <meta name="twitter:url" content="https://twitter.com/safadiamond" />
    <!-- !Instagram -->
    <meta property="instagram:card" content="summary" />
    <meta property="instagram:site" content="@safadiamondclinics" />
    <meta property="instagram:creator" content="@safadiamondclinics" />
    <meta property="instagram:title" content="عيادات الايادي البيضاء للرعاية الطبية />
    <meta property=" instagram:description" content="عيادات الايادي البيضاء للرعاية الطبية />
    <meta property=" instagram:image" content="{{ asset('frontend/images/logo.png') }}" />
    <meta property="instagram:url" content="https://www.instagram.com/safadiamondclinics/" />

    <!-- !canonical -->
    <link rel="canonical" href="https://reservations.safaalmassiclinic.com/" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/style.min.css') }}" />

    <title>
        الايادي البيضاء للرعاية الطبية
        - @yield('title')
    </title>
    <!-- icon -->
    <link rel="icon" href="{{ asset('frontend/images/logo.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('frontend/images/logo.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/logo.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: "Cairo", sans-serif;
        }

        #preloader {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100%;
            background-color: var(--text-100);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* From Uiverse.io by milley69 */
        #preloader svg polyline {
            fill: none;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        #preloader svg polyline#back {
            fill: none;
            stroke: #137570;
        }

        #preloader svg polyline#front {
            fill: none;
            stroke: #3AC2BC;
            stroke-dasharray: 48, 144;
            stroke-dashoffset: 192;
            animation: dash_682 1.4s linear infinite;
        }
        @keyframes dash_682 {
            72.5% {
                opacity: 0;
            }

            to {
                stroke-dashoffset: 0;
            }
        }

        #app {
            display: none;
        }
    </style>
    @stack('css')
</head>

<body>
    @include('sweetalert::alert')

    <!-- Header -->
    <header class="bg-white">
        <div class="container d-flex justify-content-between">
            <nav class="navbar navbar-expand-md navbar-light w-100">
                <div class="container-fluid d-flex justify-content-between">
                    <!-- Logo and Brand Name -->
                    <a class="navbar-brand d-flex align-items-center m-auto m-md-0 justify-content-between" href="#"
                        aria-label=" الايادي البيضاء للرعاية الطبية title=" الايادي البيضاء للرعاية الطبية>
                        <img alt="Logo" class="img-fluid me-2" width="220" height="auto"
                            sizes="(max-width: 715px) 100vw, 715px" srcset="
                            {{ asset('frontend/images/favicon.webp 715w')}}
                             " src="{{ asset('frontend/images/favicon.webp') }}" />
                    </a>
                    <a href="tel:0535786913" class="text-primary ">
                                <button type="button" class="btn rounded-pill px-5 py-2 btn-cyan fw-bold">
                                {{ __('trans.contact_us') }}
                                </button>
                            </a>
                    <!-- <ul class="d-lg-flex d-none list-unstyled gap-2 gap-md-3 pe-3 align-items-center m-0 ">

                        @foreach (\App\Models\Category::all() as $row)
                        <li class="nav-item">
                            <a class="nav-link text-custom" aria-label="الرئيسية" title="الرئيسية"
                                href="{{ route('our-offers.index',$row->slug)}}">{{ $row->name }}</a>
                        </li>
                        @endforeach

                    </ul> -->
                </div>
            </nav>
            <!-- <button class=" p-0 bg-transparent border-0 d-lg-none d-flex justify-content-end align-items-center"
                type="button" data-bs-toggle="offcanvas" data-bs-target="#Id1" aria-controls="Id1" id="menu">
                <i class="bi bi-list text-dark fs-3"></i>
            </button>

            <div class="offcanvas offcanvas-start bg-cyan" data-bs-scroll="true" tabindex="-1" id="Id1"
                aria-labelledby="menu">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-light" id="menu">
                        Menu
                    </h5>
                    <button type="button" class="btn-close bg-cyan" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body text-start" id="menu">
                    <ul class="d-flex d-lg-none flex-column text-light gap-2 ">

                        @foreach (\App\Models\Category::all() as $row)
                        <li class="list-unstyled">
                            <a class="nav-link text-light" aria-label="الرئيسية" title="الرئيسية"
                                href="{{ route('our-offers.index',$row->slug)}}">{{ $row->name }}</a>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div> -->
        </div>
    </header>
    <!-- <div class="position-absolute end-0 bottom-50px position-fixed z-2">
        <div class="d-flex justify-content-center align-items-center text-white p-2">
            <a href="{{ route('our-offers.show') }}#our_offers" aria-label="تعرف على عروضنا" title="تعرف على عروضنا"
                class="rounded-pill btn btn-hover-cyan shadow-sm p-2 px-3">
                <i class="bi bi-diagram-3-fill"></i>
                تعرف على عروضنا
            </a>
        </div>
    </div>

    <div class="position-absolute start-0 bottom-50px position-fixed z-2">
        <div class="d-flex justify-content-center align-items-center text-white p-2">
            <a href="#ClientReview" aria-label="آراء العملاء" title="آراء العملاء"
                class="rounded-pill btn btn-cyan shadow-sm p-2 px-3">
                <i class="bi bi-people"></i>
                آراء العملاء
            </a>
        </div>
    </div> -->
