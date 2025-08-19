<?php

use App\Http\Controllers\Auth\AuthControoller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home');
});

Route::get('/majors', function () {
    return view('front.majors');
});

Route::get('/doctors', function () {
    return view('front.doctors');
});


Route::prefix('auth')->controller(AuthControoller::class)->name('auth.')->group(function(){

    Route::get('/login','loginForm')->name("login");
    Route::post('/login','login')->name("login.post");
    
    Route::get('/register','registerForm')->name("register");
    Route::post('/register','register')->name("register.post");
});


