<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    //Function Home
    public function home(){
        return view('pages.home.home');
    }
}
