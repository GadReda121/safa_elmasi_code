<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['recruiters', 'instanttransfer']);
    }

    public function index()
    {

        return view('home', get_defined_vars());
    }

    public function uploadAndGEtPath(Request $request)
    {

        $file = $request->file('file');
        $media = \App\Models\File::create();
        $ext = $file->getClientOriginalExtension();
        $media->addMedia($file)->usingFileName(md5(uniqid()) . ".$ext")->toMediaCollection('media');
        $image = $media->getMedia('media')[0]->getUrl();

        return response()->json([
            'path_string' => $image,
        ], 200);
    }

}
