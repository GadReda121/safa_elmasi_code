<div class="mt-5" id="our_offers">

    <div class="effect_title_home m-auto d-flex justify-content-center align-items-center mb-3">
        <h5>عروضنا</h5>

        <div id="clip">
            <div id="leftTop" class="corner"></div>
            <div id="rightBottom" class="corner"></div>
            <div id="rightTop" class="corner"></div>
            <div id="leftBottom" class="corner"></div>
        </div>
        <span id="rightArrow" class="arrow"></span>
        <span id="leftArrow" class="arrow"></span>
    </div>
    <!-- swipper -->

    <div class="row d-flex justify-content-around flex-wrap p-0 m-0">
        @foreach ( $national_day_models as $row)

        <div class="mb-3 card col-lg-2 p-0 col-sm-5 col-11">
            <div class="card-body rounded overflow-hidden p-1">
                <img src="{{$row->
                    getMedia('image')->first()->getUrl('webp_format') }}" alt="{{ $row->name }}"
                    class="round img-fluid rounded">
            </div>
            <div class="card-footer p-1">

                <div class="button-borders w-100">
                    <button class="primary-button py-1 w-100"> احجز الآن
                    </button>
                </div>
            </div>
            @endforeach
        </div>

        <div class="container my-3 mb-5 mt-5" id="ClientReview">
            <div class="row">
                <div class="col-12">
                    <div class="col-md-6 m-auto text-center overflow-hidden">
                        <div class="effect_title_home m-auto d-flex justify-content-center align-items-center mb-3">
                            <h5>آراء العملاء</h5>

                            <div id="clip">
                                <div id="leftTop" class="corner"></div>
                                <div id="rightBottom" class="corner"></div>
                                <div id="rightTop" class="corner"></div>
                                <div id="leftBottom" class="corner"></div>
                            </div>
                            <span id="rightArrow" class="arrow"></span>
                            <span id="leftArrow" class="arrow"></span>
                        </div>
                        <p class="small mt-0 text-custom">
                            يمكنك مشاهدة جميع آراء عملائنا عن طريق زيارة موقعنا على جوجل ماب
                        </p>
                    </div>
                </div>
            </div>


            <div class="swiper mySwiper mb-2  review">
                <div class="swiper-wrapper h-auto">
                    @foreach ( $partners as $row )
                    <div class="swiper-slide position-relative">
                        <!-- <img src="{{ asset('frontend/images/offersDrama/03.jpg')  }}" alt="Image Description" class=" rounded"> -->

                        <img src="{{ $row->getMedia('image')->first()->getUrl('webp_format') }}"
                            alt="{{ $row->name }}" />
                    </div>

                    @endforeach
                </div>

                <div class="swiper-pagination"></div>

            </div>


            <section class="py-5 my-5 bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 m-auto">
                            <h2 class="fw-bold text-center">
                                عن عيادات الأيادي البيضاء للرعاية الطبية
                            </h2>
                            <h6 class="small text-center">
                                مركز طبي متكامل يوفر العديد من الخدمات الطبية والتي يشرف على تقديمها وإدارتها طاقم طبي
                                وإداري ذو
                                كفاءة عالية باستخدام
                                أحدث الطرق والتقنيات، وأفضل الأجهزة الطبية لضمان تقديم أفضل سبل الرعاية الطبية
                            </h6>
                            <div class="d-flex flex-column">
                                <div class="d-flex justify-content-center gap-3 flex-wrap">
                                    <div class="d-flex small align-items-center gap-1">
                                        <!-- Icon for address-->
                                        <i class="bi bi-geo-alt"></i>
                                        <a href="https://maps.app.goo.gl/aZyN4rLH376jzzNn8"
                                            class=" text-decoration-none text-cyan" aria-label="جدة الرياض"
                                            title="جدة الرياض" target="_blank" rel="noopener noreferrer">
                                            المملكة العربية السعودية - الرياض
                                        </a>
                                    </div>
                                    <div class="d-flex small align-items-center gap-1">
                                        <!-- Icon for phone-->
                                        <i class="bi bi-telephone"></i>
                                        <a href="tel:0531806360" class=" text-decoration-none text-cyan"
                                            aria-label="رقم الهاتف الرياض" title="رقم الهاتف الرياض"
                                            rel="noopener noreferrer">

                                            0531806360
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="effect_title_home m-auto d-flex justify-content-center align-items-center mb-3">
                <h5>تواصل معنا</h5>

                <div id="clip">
                    <div id="leftTop" class="corner"></div>
                    <div id="rightBottom" class="corner"></div>
                    <div id="rightTop" class="corner"></div>
                    <div id="leftBottom" class="corner"></div>
                </div>
                <span id="rightArrow" class="arrow"></span>
                <span id="leftArrow" class="arrow"></span>
            </div>
            <div class="row d-flex justify-content-center">

                <div class="col-md-5 mt-4">
                    <!-- Form (Name + Phone + Email) -->
                    <form action="{{ route('our-offers.reservation') }}?#form-submit" method="POST">
                        @csrf
                        <div class="col-md-10 mt-2">
                            <div class="form-group">
                                <label for="name" class="form-label"> @lang('trans.name')</label>
                                {!! Form::text('name',null,[
                                "class" => "form-control" .
                                ($errors->has('name') ? ' is-invalid' : '')

                                ,
                                ]) !!}
                                @error('name')
                                @foreach ($errors->get('name') as $message)
                                <span class="text-danger">{{ $message }}</span>
                                @endforeach
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-md-10 mt-3">
                            <label for="email" class="form-label"> @lang('trans.email')</label>
                            {!! Form::email('email',null,[
                            "class" => "form-control",
                            ]) !!}
                            @error('email')
                            @foreach ($errors->get('email') as $message)
                            <span class="text-danger">{{ $message }}</span>
                            @endforeach
                            @enderror
                        </div>
                        <div class="col-md-10 mt-3">
                            <div class="form-group ">
                                <label for="phone" class="form-label"> @lang('trans.phone')</label>
                                <input type="tel" id="phone" name="phone"
                                    class="form-control bg-body-tertiary {{ $errors->has('phone') ? 'is-invalid' : '' }}">
                                <span class="text-danger" id="phone-error" style="display: none;"></span>
                                @error('phone')
                                @foreach ($errors->get('phone') as $message)
                                <span class="text-danger">{{ $message }}</span>
                                @endforeach
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 col-md-10 mt-3">
                            <label for="message" class="form-label">الرساله</label>
                            <textarea class="form-control h-auto" id="message" row="4">
                  </textarea>
                        </div>
                        <div class="col-md-10 mt-4 d-flex">
                            <button type="submit" class="btn m-auto btn-cyan rounded-pill col-6 z-1">
                                ارسال</button>
                        </div>
                    </form>
                </div>



                <div class="col-md-5 mt-4">
                    <iframe width="100%" height="500" loading="lazy"
                        src="https://maps.google.com/maps?q=%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"
                        title="السعودية" aria-label="السعودية"></iframe>
                </div>

            </div>
            @push('css')
            {{-- cdn selectize --}}
            <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.min.css">
            <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/24.6.0/build/css/intlTelInput.min.css"
                integrity="sha512-X3pJz9m4oT4uHCYS6UjxVdWk1yxSJJIJOJMIkf7TjPpb1BzugjiFyHu7WsXQvMMMZTnGUA9Q/GyxxCWNDZpdHA=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />

            @endpush

            @push('js')
            {{-- jquery --}}
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            {{-- swiper cdn --}}
            {{-- selectize cdn --}}
            <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/24.6.0/build/js/intlTelInput.min.js"
                integrity="sha512-/sRFlFRbcvObOo/SxW8pvmFZeMLvAF6hajRXeX15ekPgT4guXnfNSjLC98K/Tg2ObUgKX8vn9+Th5/mGHzZbEw=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>


            <script>
                // selectize
    $('.selectize').selectize({
        sortField: 'text'
    });

    $('.book-now').click(function() {
        var offer_id = $(this).data('offer-id');
        // remove selectize
        $('select[name="offer_id[]"]')[0].selectize.destroy();
        $('select[name="offer_id[]"]').val(offer_id);
        // selectize
        $('select[name="offer_id[]"]').selectize({
            sortField: 'text'
        });

        // location to form
        $('html, body').animate({
            scrollTop: $("#book-now").offset().top
        }, 1);


    });
    document.addEventListener('DOMContentLoaded', function() {
        var input = document.querySelector("#phone");
        var errorSpan = document.querySelector("#phone-error");

        var iti = window.intlTelInput(input, {
            initialCountry: "sa", // Set default to Saudi Arabia
            onlyCountries: ["sa"], // Restrict to Saudi Arabia
            strictMode: true, // Strict validation
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.6.1/build/js/utils.js" // Load utils for validation
        });

        // Validate phone number on form submission
        var form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            if (!iti.isValidNumber()) {
                event.preventDefault();
                var errorMessage;

                // Get validation error code directly from iti instance
                var errorCode = iti.getValidationError();

                // Determine error message based on error code
                switch (errorCode) {
                    case 1: // TOO_LONG
                        errorMessage = "الرقم طويل جداً.";
                        break;
                    case 2: // TOO_SHORT
                        errorMessage = "الرقم قصير جداً.";
                        break;
                    case 3: // NOT_A_NUMBER
                        errorMessage = "الرقم يجب أن يكون رقمًا.";
                        break;
                    case 4: // INVALID_COUNTRY_CODE
                        errorMessage = "الرمز الدولي غير صالح.";
                        break;
                    default:
                        errorMessage = "رقم الهاتف غير صالح.";
                }

                // Show the error message and add 'is-invalid' class
                errorSpan.innerText = errorMessage;
                errorSpan.style.display = 'block';
                input.classList.add('is-invalid');
            } else {
                // If the number is valid, hide error and remove 'is-invalid' class
                errorSpan.style.display = 'none';
                input.classList.remove('is-invalid');
            }
        });
    });
            </script>



            @endpush
