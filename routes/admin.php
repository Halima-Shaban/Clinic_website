<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminDoctorController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group( function(){
    Route::get('/dashboard',[AdminDashboardController::class,'index'])->name('dashbourd');

    Route::prefix('/doctor')->name('doctor.')->controller(AdminDoctorController::class)->group(function(){
         Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{doctor}', 'edit')->name('edit');
    Route::put('/update/{doctor}', 'update')->name('update');
    Route::delete('/destroy/{doctor}', 'destroy')->name('destroy');

    });

});