<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function __construct(private User $model)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $models = $this->model->where('id', '!=', 1)->where('type', 'admin')->get();
        return view('users.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = \Spatie\Permission\Models\Role::pluck('name', 'id')->toArray();

        return view('users.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        DB::beginTransaction();
        $model = $this->model->create($request->validated() + ['type' => 'admin']);
        if ($request->has('role')) {
            $model->roles()->attach($request->role);
        }
        DB::commit();
        Alert::toast(__("trans.data_saved_successfully"), 'success');
        return redirect()->route('users.index');
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
        $model->role = $model->roles()->first()->id;
        $roles = \Spatie\Permission\Models\Role::pluck('name', 'id')->toArray();
        return view('users.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, $id)
    {
        DB::beginTransaction();
        $model = $this->model->findOrFail($id);
        $model->update($request->validated());
        if ($request->has('role')) {
            $model->roles()->detach();
            $model->roles()->attach([$request->role]);
        }
        DB::commit();

        Alert::toast(__("trans.data_updated_successfully"), 'success');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = $this->model->findOrFail($id);
        $model->delete();
        Alert::toast(__("trans.data_deleted_successfully"), 'success');
        return redirect()->route('users.index');
    }
}
