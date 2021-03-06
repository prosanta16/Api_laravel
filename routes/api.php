<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('data',[duumyApi::class,'getData']);

//post api
Route::post('add',[UserController::class,'add']);
//put
Route::put('update',[UserController::class,'update']);
//delete
Route::delete('delete/{id}',[UserController::class,'delete']);

//search
Route::get('search/{name}',[UserController::class,'search']);
//validate
Route::post('validate',[UserController::class,'testData']);



