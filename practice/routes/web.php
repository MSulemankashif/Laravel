<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [UserController::class, 'getUser']);
Route::get('/home/{user}', [UserController::class, "home"])->name("homePage");
Route::get('/adminLogin', [UserController::class, "adminLogin"]);