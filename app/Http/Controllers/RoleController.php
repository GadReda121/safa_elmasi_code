<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditRoleRequest;
use App\Http\Requests\RoleRequest;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct(private Role $model)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $models = $this->model->where('id', '!=', 1)->get();
        return view('roles.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = collect(Permission::all())->groupBy('group');
        return view('roles.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $request)
    {
        DB::beginTransaction();
        $model = $this->model->create($request->validated());
        $model->permissions()->sync($request->permissions);
        DB::commit();
        Alert::toast(__("trans.data_saved_successfully"), 'success');
        return redirect()->route('roles.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if ($id == 1) {
            abort(403, 'Unauthorized action.');
        }

        $model = $this->model->findOrFail($id);
        $groups = collect(Permission::all())->groupBy('group');
        return view('roles.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditRoleRequest $request, $id)
    {
        DB::beginTransaction();
        $model = $this->model->findOrFail($id);
        $model->update($request->validated());
        $model->permissions()->detach();
        $model->permissions()->attach($request->permissions);
        DB::commit();

        Alert::toast(__("trans.data_updated_successfully"), 'success');
        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = $this->model->findOrFail($id);
        $model->delete();
        Alert::toast(__("trans.data_deleted_successfully"), 'success');
        return redirect()->route('roles.index');
    }
}
