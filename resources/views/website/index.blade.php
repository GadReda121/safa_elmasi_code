@extends('website.layout')
@section('title')
{{ $category->name }}
@endsection
@push('css')
<style>
    .banner_img {
        background: #e1ecec65,
         url("{{  $category->getMedia('thumbnail')->first()->getUrl('webp_format') }}") no-repeat center;
        background-size: cover;
        background-attachment: fixed;
        height: 90vh;
        width: 100%;
    }
h1 , h2 ,h3,h5 , i{
    color:#137570;
}
    .vh-70 {
        height: 90vh;
    }


    @media (max-width: 768px) {
        .banner_img {
            height: 70vh;
            /* linear grediant support IOS */
            background: -webkit-linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.1)),
            url("{{ $category->getMedia('thumbnail')->first()->getUrl('webp_format') }}") no-repeat center;
            background-position: left;
        }

        .vh-70 {
            height: 70vh;
        }
    }

</style>
@endpush

@section('content')



<main>



<div class="bg-light  pt-5">
    <div class="container">
        <div class="row  d-flex justify-content-around align-items-start" id="book-now">
            <div class="col-md-6 m-auto text-center">
                <h4 class="text-cyan fw-bold">
                    عيادات الأيادي البيضاء للرعاية الطبية
                </h4>
                <p class="small text-custom">العلاج الطبيعي هو سر تجديد النشاط اليومي لحياتك الخاصة
                تمتع بأفضل جلسات العلاج الطبيعي مع مركز الأيادي البيضاء</p>
</div>
        </div>
        <div class="row">
        <div class="col-lg-6 d-flex justify-content-center flex-column align-items-center image">
                <img src="{{ asset('frontend/images/vertebrae.png') }}" alt="Doctors"
                    class="img-fluid animate__animated animate__slideInUp" loading="lazy" />

<div class="d-flex me-- flex-column justify-content-center align-items-center">

    <a href="#our_offers" aria-label="Book Now" title="Book Now" class=" mt-3 animate__animated animate__slideInDown">
            <button type="button" class="btn rounded-pill px-5 bg-cyan py-2 fw-bold">
                احجز الآن
            </button>
        </a>
        <a href="#our_offers" aria-label="Scroll Down" title="Scroll Down" class="rounded-circle mt-5 animate__animated animate__slideInDown animate__infinite infinite animate__slow 3s">
            <i class="bi bi-chevron-double-down display-6 cursor-pointer"></i>
        </a>
</div>
                    <!-- <img src="{{ asset('frontend/images/undraw_doctor.svg') }}" alt="Doctors"
                    class="img-fluid animate__animated animate__slideInUp" loading="lazy" /> -->
            </div>
            <div class="col-lg-5 m-auto mb-5" id="form-submit">
                <div
                    class="card p-2 border-1 rounded animate__animated animate__slideInUp">
                    <div class="card-body ">
                        <form action="{{ route('our-offers.reservation') }}?#form-submit" method="POST">
                            @csrf
                            <div class="col-md-12 mt-2">
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
                            <div class="col-md-12 mt-3">
                                <div class="form-group d-flex flex-column">
                                    <label for="phone" class="form-label">@lang('trans.phone')</label>
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


                            <!-- select -->
                            {{-- <div class="col-md-12 mt-3">
                                <label for="branch_id" class="form-label"> @lang('trans.branch_id')</label>
                                {!! Form::select('branch_id',[''=>'']+\App\Models\Branch::pluck('name','id')->toArray()
                                ,
                                null
                                ,[
                                "class" => "form-control selectize ".
                                ($errors->has('branch_id') ? ' is-invalid' : '')

                                ,
                                ]) !!}
                                @error('branch_id')
                                @foreach ($errors->get('branch_id') as $message)
                                <span class="text-danger">{{ $message }}</span>
                                @endforeach
                                @enderror
                            </div> --}}
                            <!-- select -->
                            <div class="col-md-12 mt-3">
                                <label for="offer_id" class="form-label"> @lang('trans.offer_id')</label>
                                {!! Form::select(
                                'offer_id[]', // Add '[]' to the name attribute to allow multiple values
                                ['' => ''] + $national_day_models
                                ->map(fn($national_day_model) => [
                                'id' => $national_day_model->id,
                                'name' => $national_day_model->name
                                ])
                                ->pluck('name', 'id')
                                ->toArray(),
                                null,
                                [
                                'class' => 'form-control selectize ' . ($errors->has('offer_id') ? ' is-invalid' : ''),
                                'id' => "offer_id",
                                'multiple' => 'multiple' // Enable multiple selection
                                ]
                                ) !!}
                                @error('offer_id')
                                @foreach ($errors->get('offer_id') as $message)
                                <span class="text-danger">{{ $message }}</span>
                                @endforeach
                                @enderror
                            </div>


                            <!-- btn for submit -->
                            <div class="col-md-12 mt-4 d-flex m-auto">
                                <button type="submit" class="btn btn-cyan rounded-pill m-auto col-6 z-1">احجز موعد
                                    الآن</button>
                            </div>
                        </form>
                    </div>
                    <!-- <img src="{{ asset('frontend/images/waves.svg') }}" alt="waves"
                        class="position-absolute start-0 end-0 w-100 bottom-0" /> -->

                </div>
            </div>

        </div>
    </div>







    <!-- <div class="banner_img">
        <div class="container">
            <div class="row">
                <div class=" d-flex justify-content-md-start justify-content-center align-items-center w-100 vh-70">
                    <!-- <div class="col-6 d-md-inline-block d-none">
                        <img src="{{ asset('frontend/images/undraw_medicine.svg') }}" alt="medicaine.svg" class="img-fluid">
                    </div> //
                    <div class="d-flex col-md-5 col-10  rounded flex-column align-content-center text-center justify-content-center ">
                        <h5 class="fw-bold animate__animated animate__slideInDown mb-2 mb-md-0">
                            الايادي البيضاء للرعاية الطبية
                        </h5>
                        <h1 id="typedHair" class="fw-bold display-5 mt-1 animate__animated animate__slideInDown">
                        </h1>
                        <a href="#book-now" aria-label="Book Now" title="Book Now" class="text-primary mt-3 animate__animated animate__slideInDown">
                            <button type="button" class="btn rounded-pill px-5 py-2 btn-light fw-bold text-cyan">
                                احجز الآن
                            </button>
                        </a>
                        <a href="#book-now" aria-label="Scroll Down" title="Scroll Down" class="rounded-circle mt-5 animate__animated animate__slideInDown animate__infinite infinite animate__slow 3s">
                            <i class="bi bi-chevron-double-down display-6 cursor-pointer"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    @include('website.shared-data')

</main>


@endsection
@push('js')
<script>
    var text = "{{ $category->word }}";
    // spilt by , text
    var textArray = text.split(",");
    // return in array
    var typed = new Typed("#typedHair", {
        strings: textArray, // Text to type
        typeSpeed: 50, // Typing speed in milliseconds
        backSpeed: 25, // Backspacing speed in milliseconds
        loop: true, // Loop the typing effect
        showCursor: false, // Hide the cursor
        // time to start typing
        startDelay: 10
    , });

</script>
@endpush
