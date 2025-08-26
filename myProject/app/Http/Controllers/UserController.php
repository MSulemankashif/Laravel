<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Method
     public function getUser($name){
        return view('user', ['name' => $name]);
    }

    public function printData(){
        return "This is fromController";
    }

    function getUserName($name){
        echo "The name is $name";
        return  view('about'); 
    }
};
