<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginpagecontroller extends Controller
{
    public function toLoginPage(){
        return view('loginpage/loginpage');
    }
}
