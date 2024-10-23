<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationRequest;
use App\Models\Offer;
use App\Models\Partner;

class WebsiteController extends Controller
{

    public function __construct(private Offer $offer, private Partner $partner)
    {
    }

    public function index($slug)
    {
        $category = \App\Models\Category::where('slug', $slug)->first();
        $national_day_models = $this->offer
            ->with(relations: 'media')->whereHas('category', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })
            ->get();
        $partners = $this
            ->partner
            ->with('media')->where('status', 'active')
            ->get();

        return view('website.index', get_defined_vars());
    }

    public function show()
    {
        return to_route('our-offers.index', parameters: \App\Models\Category::first()->slug);
    }


    public function thanks()
    {
        return view('website.thanks', get_defined_vars());

    }

    public function privatePolicy()
    {
        return view('website.private-policy', get_defined_vars());

    }
    public function reservation(StoreReservationRequest $request)
    {

        $reservation = \App\Models\Reservation::create($request->validated());
        toast()
            ->success('لقد تم إرسال حجزك بنجاح.')
            ->autoClose(5000)
            ->position('top-right');
        return to_route('thanks');
    }
}
