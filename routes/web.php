<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome',[
        'title' => "Welcome",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        'name' => 'rifqi',
        'email' => 'rifqi123@gmail.com'
    ]);
});

Route::get('/home', function () {
    return view('home', [
        'title' => "Home",
    ]);
});

Route::get('/posts', [PostController::class,'index']);

Route::get('/posts/{slug}', [PostController::class,'show']);




