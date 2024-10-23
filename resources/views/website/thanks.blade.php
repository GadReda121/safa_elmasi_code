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
    <meta name="author" content="الايادي البيضاء للرعاية الطبية" />
    <meta name="description" content="الايادي البيضاء للرعاية الطبية" />
    <meta name="keywords"
        content="الايادي البيضاء للرعاية الطبية, عيادات الايادي البيضاء للرعاية الطبية, الايادي البيضاء للرعاية الطبية, الايادي البيضاء للرعاية الطبية الرياض, الايادي البيضاء للرعاية الطبية السعودية, الايادي البيضاء للرعاية الطبية الرياض السعودية" />
    <!-- !More Meta -->
    <meta name="theme-color" content="#137570" />
    <meta name="msapplication-navbutton-color" content="#137570" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#137570" />
    <meta name="msapplication-TileColor" content="#137570" />
    <meta name="msapplication-TileImage" content="{{ asset('frontend/images/logo.png') }}" />
    <meta name="application-name" content="عيادات الايادي البيضاء للرعاية الطبية" />
    <meta name="msapplication-tooltip" content="عيادات الايادي البيضاء للرعاية الطبية" />
    <meta name="msapplication-starturl" content="/" />
    <meta name="msapplication-window" content="width=800;height=600" />
    <meta name="msapplication-task"
        content="name=عيادات الايادي البيضاء للرعاية الطبية;action-uri=/;icon-uri=/{{ asset('frontend/images/logo.png') }}" />
    <!-- !iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="عيادات الايادي البيضاء للرعاية الطبية" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <!-- !Open Graph -->
    <meta property="og:title" content="عيادات الايادي البيضاء للرعاية الطبية" />
    <meta property="og:description" content="الثقة العربية - الصفحة الرئيسية" />
    <meta property="og:image" content="{{ asset('frontend/images/logo.png') }}" />
    <meta property="og:url" content="https://reservations.safaalmassiclinic.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="عيادات الايادي البيضاء للرعاية الطبية" />
    <meta property="og:locale" content="ar_SA" />
    <meta property="og:locale:alternate" content="en_GB" />
    <!-- !Twitter -->
    <meta name="twitter:card" content="للخدمات التسويقية والتقنية" />
    <meta name="twitter:site" content="@safadiamond" />
    <meta name="twitter:creator" content="@safadiamond" />
    <meta name="twitter:title" content="عيادات الايادي البيضاء للرعاية الطبية" />
    <meta name="twitter:description" content="عيادات الايادي البيضاء للرعاية الطبية" />
    <meta name="twitter:image" content="{{ asset('frontend/images/logo.png') }}" />
    <meta name="twitter:url" content="https://twitter.com/safadiamond" />
    <!-- !Instagram -->
    <meta property="instagram:card" content="summary" />
    <meta property="instagram:site" content="@safadiamondclinics" />
    <meta property="instagram:creator" content="@safadiamondclinics" />
    <meta property="instagram:title" content="عيادات الايادي البيضاء للرعاية الطبية" />
    <meta property="instagram:description" content="عيادات الايادي البيضاء للرعاية الطبية" />
    <meta property="instagram:image" content="{{ asset('frontend/images/logo.png') }}" />
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
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: "El Messiri", sans-serif;
        }

        @import url('https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap');

        * {
            font-family: "El Messiri", sans-serif;
            padding: 0%;
            margin: 0%;
            box-sizing: border-box
        }

        *::selection {
            background: #137570;
            color: #fff;
        }

        .bg-thanks {
            background: #f9f8fa;
        }

        .thank_you {
            font-size: 2rem;
            color: #137570;
            width: 100%;
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .thank_you .card {
            text-align: center;
            padding: 30px 20px;
            border-radius: 10px;
            box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
            border: 1px solid #137570;
        }

        .thank_you .card h4 {
            color: #137570;
            font-weight: bold;
        }

        .thank_you .card p {
            color: #000;
            font-size: medium;
        }

        .thank_you .flex-column {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 5px;
        }
    </style>
  <!-- Snap Pixel Code -->
<script type='text/javascript'>
    (function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
    {a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
    a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
    r.src=n;var u=t.getElementsByTagName(s)[0];
    u.parentNode.insertBefore(r,u);})(window,document,
    'https://sc-static.net/scevent.min.js');

    snaptr('init', '3db69cee-393b-4504-9a0e-c30839c56364', {});

    snaptr('track', 'PAGE_VIEW');

    </script>
    <!-- End Snap Pixel Code -->
</head>

<body>
    @include('sweetalert::alert')

    <!-- Header -->
    <header class="bg-white">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container-fluid">
                    <!-- Logo and Brand Name -->
                    <a class="navbar-brand d-flex align-items-center m-auto m-md-0 justify-content-center" href="#"
                        aria-label=" الايادي البيضاء للرعاية الطبية" title="الايادي البيضاء للرعاية الطبية">
                        <img alt="Logo" class="img-fluid me-2" width="220" height="auto"
                            sizes="(max-width: 715px) 100vw, 715px" srcset="
                            {{ asset('frontend/images/favicon.webp')}},
                            {{ asset('frontend/images/favicon.webp')}},
                            {{ asset('frontend/images/favicon.webp')}},
                            {{ asset('frontend/images/favicon.webp')}}
                             " src="{{ asset('frontend/images/favicon.webp') }}" />
                    </a>

                    <ul
                        class="d-flex list-unstyled gap-2 gap-md-3 pe-3 align-items-center m-0 flex-wrap justify-content-center">

                        @foreach (\App\Models\Category::all() as $row)
                        <li class="nav-item">
                            <a class="nav-link text-custom" aria-label="الرئيسية" title="الرئيسية"
                                href="{{ route('our-offers.index',$row->slug)}}">{{ $row->name }}</a>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="position-absolute end-0 bottom-50px position-fixed z-2">
        <div class="d-flex justify-content-center align-items-center text-white p-2">
            <a href="{{ route("our-offers.show") }}#our_offers" aria-label="تعرف على عروضنا" title="تعرف على عروضنا"
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
    </div>

    <div class="bg-thanks">
        <div class="container">
            <div class="row">
                <div class="thank_you">
                    <div class="card">
                        <div class="card-body">
                            <div class="flex-column">
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="#137570"
                                    class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <h4 class="mt-3">
                                    تم استلام طلبك بنجاح
                                </h4>
                                <p>
                                    سيتم التواصل معكم في أقرب وقت ممكن لتأكيد الحجز, شكراً لكم 😊
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
