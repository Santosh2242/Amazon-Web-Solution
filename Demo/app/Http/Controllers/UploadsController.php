<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadsController extends Controller
{
    //
    public function create(){
        return view('upload_form');
    }

    public function save(Request $request){

        $path = $request->file('attachement')->store('uploads');
        return $path;
    }
}
