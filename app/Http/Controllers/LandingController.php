<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    function index(){
        return view('landing');
    }

    function privacy(){
        return view('privacy');
    }

    function menu(){
        return view('menulanding');
    }
    function about(){
        return view('about');
    }
}
