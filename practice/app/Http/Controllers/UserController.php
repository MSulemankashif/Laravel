<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rules\Exists;

class UserController extends Controller
{
    // Method 
    function getUser(){
        return view('about');
    }

    function home($name){
        return view('welcome', ['user'=>$name]);
    }

    function adminLogin(){
        if(View::exists('admin.login')){
            return view('admin.login');
        }else{
            echo "View not found";
        }
    }
}
