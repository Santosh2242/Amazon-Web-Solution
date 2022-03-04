<?php
use Illuminate\Support\Facades\Route;
use \Symfony\Component\HttpFoundation\Request;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\UploadsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post/create', function () {
    return view('home');
});

Route::post('/post/store',[PostController::class,'store']);

Route::get('/home', function () {
    return view('task.home');
});
Route::get('/about', function () {
    return view('task.About');
});
Route::get('/service', function () {
    return view('task.service');
});

Route::get('/singh', function () {
    return view('singh');
});

Route::get('/upload/form',[UploadsController::class,'create']);
Route::post('/upload/save',[UploadsController::class,'save']);

