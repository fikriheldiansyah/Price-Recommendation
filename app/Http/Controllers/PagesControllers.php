<?php

    namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function home(){
        return view('home');
    }
    public function welcome(){
        return view('welcome');
    }
    public function signup(){
        return view('signup');
    }
    public function result(){
        return view('result');
    }
}
