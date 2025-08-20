<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Method
     public function getUser(){
        return "Suleman";
    }

    public function printData(){
        return "This is fromController";
    }

    function getUserName($name){
        echo "The name is $name";
        return  view('about'); 
    }
};
