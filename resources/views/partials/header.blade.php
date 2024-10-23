<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <!-- !Meta Codes -->
    <meta charset="UTF-8" />
    {{-- viewport --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="ar" />
    <meta http-equiv="content-script-type" content="text/javascript" />
    <meta http-equiv="content-style-type" content="text/css" />
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> {{env('APP_NAME')}} | @yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('frontend/images/logo.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/logo.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- !More Meta -->
    <meta name="theme-color" content="#51a2a5" />
    <meta name="msapplication-navbutton-color" content="#51a2a5" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#51a2a5" />
    <meta name="msapplication-TileColor" content="#51a2a5" />
    <meta name="msapplication-TileImage" content="{{ asset('frontend/images/logo.png') }}" />
    <meta name="application-name" content="عيادات صفا الماسى" />
    <meta name="msapplication-tooltip" content="عيادات صفا الماسى" />
    <meta name="msapplication-starturl" content="/" />
    <meta name="msapplication-window" content="width=800;height=600" />
    <meta name="msapplication-task" content="name=عيادات صفا الماسى;action-uri=/;icon-uri=/{{ asset('frontend/images/logo.png') }}" />
    <!-- !iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="عيادات صفا الماسى" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <!-- !Open Graph -->
    <meta property="og:title" content="عيادات صفا الماسى" />
    <meta property="og:description" content="الثقة العربية - الصفحة الرئيسية" />
    <meta property="og:image" content="{{ asset('frontend/images/logo.png') }}" />
    <meta property="og:url" content="https://reservations.safaalmassiclinic.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="عيادات صفا الماسى" />
    <meta property="og:locale" content="ar_SA" />
    <meta property="og:locale:alternate" content="en_GB" />
    <!-- !Twitter -->
    <meta name="twitter:card" content="للخدمات التسويقية والتقنية" />
    <meta name="twitter:site" content="@safadiamond" />
    <meta name="twitter:creator" content="@safadiamond" />
    <meta name="twitter:title" content="عيادات صفا الماسى" />
    <meta name="twitter:description" content="عيادات صفا الماسى" />
    <meta name="twitter:image" content="{{ asset('frontend/images/logo.png') }}" />
    <meta name="twitter:url" content="https://twitter.com/safadiamond" />
    <!-- !Instagram -->
    <meta property="instagram:card" content="summary" />
    <meta property="instagram:site" content="@safadiamondclinics" />
    <meta property="instagram:creator" content="@safadiamondclinics" />
    <meta property="instagram:title" content="عيادات صفا الماسى" />
    <meta property="instagram:description" content="عيادات صفا الماسى" />
    <meta property="instagram:image" content="{{ asset('frontend/images/logo.png') }}" />
    <meta property="instagram:url" content="https://www.instagram.com/safadiamondclinics/" />

    <!-- !canonical -->
    <link rel="canonical" href="https://reservations.safaalmassiclinic.com/" />

    @if(app()->getLocale() == "ar")
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css-rtl/vendors.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/vendors/css/forms/toggle/switchery.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/vendors/css/ui/dragula.min.css") }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css-rtl/app.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css-rtl/custom-rtl.css") }}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css-rtl/core/menu/menu-types/vertical-menu.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css-rtl/core/colors/palette-gradient.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css-rtl/plugins/forms/switch.css") }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/style-rtl.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/style-rtl.css") }}">
    @else
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css/vendors.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/vendors/css/forms/toggle/switchery.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/vendors/css/ui/dragula.min.css") }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css/app.css") }}">
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css/core/menu/menu-types/vertical-menu.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css/core/colors/palette-gradient.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("app-assets/css/plugins/forms/switch.css") }}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @endif
    <link rel="stylesheet" href="{{ asset("assets/css/general.css") }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/redactor/css/redactor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/redactor/plugins/alignment/alignment.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/redactor/plugins/quranhadith/quranhadith.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: "El Messiri", sans-serif;
        }

    </style>
    @stack('styles')
</head>
<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
