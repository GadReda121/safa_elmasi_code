<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Category;
use App\Models\Offer;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class OfferController extends Controller
{
    public function __construct(private Offer $model)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $models = $this->model
            ->orderBy('created_at','desc')->
        get();
        return view('offers.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $model = $this->model;
        $categories = ['' => __('trans.select')] + Category::pluck('name', 'id')->toArray();
        return view('offers.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OfferRequest $request)
    {
        DB::beginTransaction();
        $model = $this->model->create($request->validated());
        if ($request->image) {
            $model->addMedia($request->image)->toMediaCollection('image');
        }
        // if isset items
        if ($request->items) {
            foreach ($request->items as $item) {
                $model->items()->create($item);
            }
        }
        DB::commit();
        Alert::toast(__("trans.data_saved_successfully"), 'success');
        return redirect()->route('offers.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = $this->model->findOrFail($id);
        $categories = ['' => __('trans.select')] + Category::pluck('name', 'id')->toArray();
        return view('offers.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OfferRequest $request, $id)
    {
        DB::beginTransaction();

        $model = $this->model->findOrFail($id);
        $model->update($request->validated());
        if ($request->image) {
            // clear media  collection
            $model->clearMediaCollection('image');
            $model->addMedia($request->image)->toMediaCollection('image');
        }
        if ($request->items) {
            $model->items()->delete();
            foreach ($request->items as $item) {
                $model->items()->create($item);
            }
        }
        DB::commit();

        Alert::toast(__("trans.data_updated_successfully"), 'success');
        return redirect()->route('offers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = $this->model->findOrFail($id);
        $model->delete();
        Alert::toast(__("trans.data_deleted_successfully"), 'success');
        return redirect()->route('offers.index');
    }
}
