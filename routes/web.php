<?php

use App\Http\Controllers\Admin\AdminMajorController;
use App\Http\Controllers\Auth\AuthControoller;
use App\Http\Controllers\front\AppointmentController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\DoctorController;
use App\Http\Controllers\front\MajorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name("home");

Route::get('/majors', [MajorController::class,'index'])->name('front.majors');

Route::get('/doctors/majors/{major_id?}', [DoctorController::class,'index'])->name('front.doctors.index');

Route::get('/doctors/{doctor}', [DoctorController::class,'show'])->name('front.doctors.show');

Route::post('/doctors/appointment', [AppointmentController::class,'storeAppointment'])->name('front.appointment.store');





Route::prefix('auth')->controller(AuthControoller::class)->name('auth.')->group(function () {

    Route::get('/login', 'loginForm')->name("login");
    Route::post('/login', 'login')->name("login.post");

    Route::get('/register', 'registerForm')->name("register");
    Route::post('/logout', 'logout')->name("logout");
    Route::post('/register', 'register')->name("register.post");
});

Route::get("/contact", [ContactController::class,'index'])->name("contact");



require __DIR__.'/admin.php';
