<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

 Route::get('users',[UserController::class,'index']);

Route::view("add","add");
Route::post("addho",[UserController::class,'login']);

//Upload
Route::view("upload","upload");
Route::post("upload",[UserController::class,'uploadFile']);
