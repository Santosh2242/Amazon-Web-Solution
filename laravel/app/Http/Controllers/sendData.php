<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class sendData extends Controller
{
    //
    public function store(Request $req){
       DB::table('image')->insert([
          'img_name'=>$req->file('img')->store('uploads')
       ]);
    }
}
