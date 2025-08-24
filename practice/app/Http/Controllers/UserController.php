<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Method 
    function getUser(){
        return view('about');
    }
}
