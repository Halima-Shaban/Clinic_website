<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post('register', [AuthController::class,'register']);
Route::post('client/logIn', [AuthController::class,'logIn']);
Route::post('client/profile', [AuthController::class,'showProfile'])->middleware("auth:sanctum");
Route::post('admin/logIn', [AuthController::class,'AdminLogin']);


Route::get('admin/dashboard', function (Request $request) {
    dd('welcome from admin dashboard');
})->middleware('auth:admin-api');




require_once __DIR__.'/admin-api.php';
