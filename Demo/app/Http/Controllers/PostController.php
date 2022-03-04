<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Str;


class PostController extends Controller
{
    public function store(Request $request){
            
        DB::table('user_post')->insert([

            'title'=>$request->title,
            'Desc'=>$request->desc
           
        ]);
    }
}
