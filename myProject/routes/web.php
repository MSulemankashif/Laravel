<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Using Controllers
Route::get( 'user/{name}', [UserController::class, "getUser"]);
Route::get('about',[UserController::class, "printData"]);


