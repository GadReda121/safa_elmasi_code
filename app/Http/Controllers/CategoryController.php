<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
// Remove the duplicate import statement
// use PDF;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function __construct(private Category $model)
    {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $models = $this->model->all();
        return view('categories.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = $this->model;
        return view('categories.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {

        $model = $this->model->create($request->validated() +
            [
                'slug' => slug($request->name),
            ]
        );
        if ($request->image) {
            $model->addMedia($request->image)->toMediaCollection('thumbnail');
        }
        Alert::toast(__("trans.data_saved_successfully"), 'success');
        return redirect()->route('categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = $this->model->findOrFail($id);

        return view('categories.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, $id)
    {
        $model = $this->model->findOrFail($id);
        $model->update($request->validated());
        if ($request->image) {
            $model->addMedia($request->image)->toMediaCollection('thumbnail');
        }
        Alert::toast(__("trans.data_updated_successfully"), 'success');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = $this->model->findOrFail($id);
        // if model offers
        if ($model->offers()->count() > 0) {
            Alert::toast(__("trans.cant_delete"), 'error');
            return redirect()->route('categories.index');
        }
        $model->delete();
        Alert::toast(__("trans.data_deleted_successfully"), 'success');
        return redirect()->route('categories.index');
    }

}
