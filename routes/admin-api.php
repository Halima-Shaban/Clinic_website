<?php

use App\Http\Controllers\Api\MajorController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {

    Route::resource('majors', MajorController::class)->middleware('auth:admin-api');
    ;
});
