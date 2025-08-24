<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Using Controllers
Route::get( 'user', [UserController::class, "getUser"]);
Route::get('about/{name}',[UserController::class, "printData"]);
Route::get('welcome', [UserController::class, "getUser"]);

