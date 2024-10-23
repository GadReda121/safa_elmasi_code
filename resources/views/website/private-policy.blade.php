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
h1, h2{
    color: #0C5475;
}
h3,  h4{
    color: #137570;
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
                            {{ asset('frontend/images/favicon.webp 200w')}},
                            {{ asset('frontend/images/favicon.webp 433w')}},
                            {{ asset('frontend/images/favicon.webp 611w')}},
                            {{ asset('frontend/images/favicon.webp 715w')}}
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

<div class="bg-light">
    <div class="container p-2 p-md-3">
        <div class="row">
            <h1 class=" text-center mb-0">سياسة الخصوصية</h1>
            <p class="text-center mt-0">آخر تحديث: 15 أكتوبر 2024</p>
            <p class="mt-2">توضح سياسة الخصوصية هذه سياساتنا وإجراءاتنا بشأن جمع واستخدام والكشف عن معلوماتك عند استخدامك للخدمة وتخبرك عن حقوق الخصوصية الخاصة بك وكيفية حمايتك بموجب القانون.</p>
            <p>نستخدم بياناتك الشخصية لتقديم وتحسين الخدمة. باستخدام الخدمة، فإنك توافق على جمع واستخدام المعلومات وفقًا لهذه السياسة. تم إنشاء سياسة الخصوصية هذه بمساعدة <a href="https://www.termsfeed.com/privacy-policy-generator/" target="_blank">مولد سياسة الخصوصية</a>.</p>

            <h2 class=" mt-3">التفسير والتعريفات:</h2>

            <h3 class="">التفسير</h3>
            <p>الكلمات التي تبدأ بحرف كبير لها معاني محددة في الشروط التالية. ستحتفظ التعريفات الواردة بنفس المعنى سواء ظهرت بصيغة المفرد أو الجمع.</p>

            <h3 class="">التعريفات</h3>
            <p>لأغراض سياسة الخصوصية هذه:</p>
            <ul class="me-5">
                <li>
                    <p><strong class="">الحساب</strong> يعني حسابًا فريدًا تم إنشاؤه لك للوصول إلى خدمتنا أو أجزاء من خدمتنا.</p>
                </li>
                <li>
                    <p><strong class="">التابع</strong> يعني كيانًا يتحكم به أو يخضع لسيطرة أو يتشارك السيطرة مع أحد الأطراف، حيث "السيطرة" تعني امتلاك 50٪ أو أكثر من الأسهم أو المصلحة في الأسهم أو الأوراق المالية الأخرى التي تمنح الحق في التصويت لانتخاب المديرين أو السلطة الإدارية الأخرى.</p>
                </li>
                <li>
                    <p><strong class="">الشركة</strong> (يشار إليها إما بـ "الشركة" أو "نحن" أو "نا" في هذه الاتفاقية) تشير إلى عيادة الايادي البيضاء للرعاية الطبيه المنزليه، الرياض.</p>
                </li>
                <li>
                    <p><strong class="">ملفات تعريف الارتباط</strong> هي ملفات صغيرة يتم وضعها على جهاز الكمبيوتر أو الهاتف المحمول أو أي جهاز آخر خاص بك من خلال موقع الويب، وتحتوي على تفاصيل حول سجل تصفحك للموقع من بين استخدامات أخرى.</p>
                </li>
                <li>
                    <p><strong class="">الدولة</strong> تشير إلى: المملكة العربية السعودية.</p>
                </li>
                <li>
                    <p><strong class="">الجهاز</strong> يعني أي جهاز يمكنه الوصول إلى الخدمة مثل جهاز الكمبيوتر أو الهاتف المحمول أو الجهاز اللوحي الرقمي.</p>
                </li>
                <li>
                    <p><strong class="">البيانات الشخصية</strong> تعني أي معلومات تتعلق بفرد يمكن تحديد هويته أو معرفته.</p>
                </li>
                <li>
                    <p><strong class="">الخدمة</strong> تشير إلى الموقع الإلكتروني.</p>
                </li>
                <li>
                    <p><strong class="">مقدم الخدمة</strong> يعني أي شخص طبيعي أو قانوني يعالج البيانات نيابة عن الشركة. يشير إلى الشركات أو الأفراد التابعين لجهات خارجية الذين يعملون على تسهيل الخدمة، أو تقديم الخدمة نيابة عن الشركة، أو تنفيذ خدمات ذات صلة بالخدمة أو المساعدة في تحليل كيفية استخدام الخدمة.</p>
                </li>
                <li>
                    <p><strong class="">بيانات الاستخدام</strong> تشير إلى البيانات التي يتم جمعها تلقائيًا، إما التي يتم توليدها من استخدام الخدمة أو من بنية الخدمة نفسها (على سبيل المثال، مدة زيارة الصفحة).</p>
                </li>
                <li>
                    <p><strong class="">الموقع الإلكتروني</strong> يشير إلى عيادة الايادي البيضاء للرعاية الطبيه المنزليه، ويمكن الوصول إليه من خلال <a href="https://offers.darbalhayatclinics.com/our-offers/%D8%B9%D8%B1%D9%88%D8%B6-%D8%A7%D9%84%D8%A7%D8%B3%D9%86%D8%A7%D9%86" rel="external nofollow noopener" target="_blank">هذا الرابط</a></p>
                </li>
                <li>
                    <p><strong class="">أنت</strong> يعني الفرد الذي يصل أو يستخدم الخدمة، أو الشركة، أو الكيان القانوني الآخر الذي يتم الوصول إلى الخدمة أو استخدامها نيابة عنه، حسب الاقتضاء.</p>
                </li>
            </ul>

            <h2 class="">جمع واستخدام بياناتك الشخصية :</h2>
            <h3 class="">أنواع البيانات التي تم جمعها :</h3>
            <h4 class="">البيانات الشخصية</h4>
            <p>أثناء استخدام خدمتنا، قد نطلب منك تزويدنا بمعلومات تعريف شخصية معينة يمكن استخدامها للاتصال بك أو تحديد هويتك. قد تشمل معلومات التعريف الشخصية، على سبيل المثال لا الحصر:</p>
            <ul class="me-5">

                <li>البريد الإلكتروني</li>
                <li>الاسم الأول واسم العائلة</li>
                <li>رقم الهاتف</li>
                <li>العنوان، الولاية، المنطقة، الرمز البريدي/الرمز البريدي، المدينة</li>
                <li>بيانات الاستخدام</li>
            </ul>

            <h4 class=" mt-4">بيانات الاستخدام</h4>

            <p>يتم جمع بيانات الاستخدام تلقائيًا أثناء استخدام الخدمة.</p>
            <p>قد تشمل بيانات الاستخدام معلومات مثل عنوان بروتوكول الإنترنت (IP) لجهازك، ونوع المتصفح، وإصدار المتصفح، والصفحات التي تزورها على خدمتنا، ووقت وتاريخ زيارتك، والوقت المستغرق في تلك الصفحات، ومعرفات الجهاز الفريدة، وبيانات التشخيص الأخرى.</p>

            <h4 class=" mt-4">تقنيات التتبع وملفات تعريف الارتباط</h4>

            <p>نحن نستخدم ملفات تعريف الارتباط وتقنيات التتبع المشابهة لتتبع النشاط على خدمتنا وتخزين معلومات معينة. تشمل تقنيات التتبع المستخدمة إشارات الويب والعلامات والنصوص لجمع المعلومات وتتبعها ولتحسين وتحليل خدمتنا. قد تشمل التقنيات التي نستخدمها:</p>
            <ul class="me-5">

                <li><strong class="">ملفات تعريف الارتباط أو ملفات تعريف الارتباط الخاصة بالمتصفح.</strong> ملف تعريف الارتباط هو ملف صغير يتم وضعه على جهازك. يمكنك توجيه متصفحك إلى رفض جميع ملفات تعريف الارتباط أو الإشارة إلى إرسال ملف تعريف ارتباط. ومع ذلك، إذا لم تقبل ملفات تعريف الارتباط، قد لا تتمكن من استخدام بعض أجزاء خدمتنا.</li>
                <li><strong class="">إشارات الويب.</strong> قد تحتوي بعض أقسام خدمتنا ورسائل البريد الإلكتروني الخاصة بنا على ملفات إلكترونية صغيرة تُعرف بإشارات الويب (تسمى أيضًا صور gif الواضحة أو علامات البكسل أو صور gif ذات البكسل الفردي) التي تتيح للشركة، على سبيل المثال، حساب المستخدمين الذين زاروا تلك الصفحات أو فتحوا بريدًا إلكترونيًا ولإحصائيات أخرى.</li>
            </ul>

            <h3 class=" mt-4">استخدام بياناتك الشخصية</h3>

            <ul class="me-5">

                <li><strong class="">لتقديم وصيانة خدمتنا</strong>، بما في ذلك مراقبة استخدام خدمتنا.</li>
                <li><strong class="">لإدارة حسابك:</strong> لإدارة تسجيلك كمستخدم للخدمة.</li>
                <li><strong class="">لأداء عقد:</strong> تطوير، الامتثال وتنفيذ العقد الذي تم شراؤه منك.</li>
                <li><strong class="">للاتصال بك:</strong> للتواصل عبر البريد الإلكتروني أو المكالمات الهاتفية أو الرسائل النصية القصيرة.</li>
                <li><strong class="">لأغراض أخرى:</strong> تحليل البيانات وتحديد اتجاهات الاستخدام.</li>
            </ul>
        </div>
    </div>
</div>


