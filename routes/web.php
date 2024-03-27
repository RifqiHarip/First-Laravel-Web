<?php

use Illuminate\Support\Facades\Route;


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


