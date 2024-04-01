<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;

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

Route::get('/posts',[PostController::class,'collect']);
Route::get('/posts/{id}',[PostController::class,'collectone']);

Route::get('student',[StudentController::class,'index']);
Route::post('student',[StudentController::class,'store']);
Route::put('student/update/{id}',[StudentController::class,'update']);
Route::delete('student/delete/{id}',[StudentController::class,'delete']);
