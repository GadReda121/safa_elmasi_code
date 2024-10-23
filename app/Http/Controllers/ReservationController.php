<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use RealRashid\SweetAlert\Facades\Alert;

class ReservationController extends Controller
{
    public function __construct(private Reservation $model)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $models = $this->model->with('branch')->get();
        $offers = \App\Models\Offer::all();
        return view('reservations.index', get_defined_vars());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = $this->model->findOrFail($id);
        $model->delete();
        Alert::toast(__("trans.data_deleted_successfully"), 'success');
        return redirect()->route('reservations.index');
    }
}
