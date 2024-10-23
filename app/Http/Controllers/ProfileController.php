<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{


    public function index()
    {
        return view('profile');
    }


    public function update(UpdateProfileRequest $request)
    {
        $user = $request->user();

        $user->update(array_filter($request->validated()));
        Alert::toast('تم تحديث البيانات بنجاح', 'success');

        return redirect()->route('profile.index');
    }
}
