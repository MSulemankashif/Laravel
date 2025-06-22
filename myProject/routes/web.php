<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/user/{username}', function(){
    return view('user');
});

Route::get('/userId/{id}', function (int $id){
    return '<h1>User ID </h1>';
});