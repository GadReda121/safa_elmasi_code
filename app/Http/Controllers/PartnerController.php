<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Partner;
use App\Http\Requests\PartnerRequest;
use RealRashid\SweetAlert\Facades\Alert;

class PartnerController extends Controller
{
    public function __construct(private Partner $model)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $models = $this->model->all();
        return view('partners.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $model = $this->model;
        return view('partners.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartnerRequest $request)
    {

        $model = $this->model->create($request->validated());
        if ($request->image) {
            $model->addMedia($request->image)->toMediaCollection('image');
        }
        Alert::toast(__("trans.data_saved_successfully"), 'success');
        return redirect()->route('partners.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = $this->model->findOrFail($id);
        return view('partners.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PartnerRequest $request, $id)
    {
        $model = $this->model->findOrFail($id);
        $model->update($request->validated());
        if ($request->image) {
            // clear media  collection
            $model->clearMediaCollection('image');
            $model->addMedia($request->image)->toMediaCollection('image');
        }
        Alert::toast(__("trans.data_updated_successfully"), 'success');
        return redirect()->route('partners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = $this->model->findOrFail($id);
        $model->delete();
        Alert::toast(__("trans.data_deleted_successfully"), 'success');
        return redirect()->route('partners.index');
    }
}
