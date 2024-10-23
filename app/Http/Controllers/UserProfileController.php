<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Requests\UpdateUserProfileRequest;

class UserProfileController extends Controller
{


    public function index()
    {
        return view('auth.profile');
    }


    public function update(UpdateUserProfileRequest $request)
    {
        $user = $request->user();

        $user->update(array_filter($request->validated()));
        if ($request->password) {
            $user->update([
                'password' => bcrypt($request->password),
            ]);
        }
        \Illuminate\Support\Facades\Session::put(
            'success',
            'تم تحديث البليانات بنجاح'
        );

        return redirect()->route('user-profile');
    }
}
