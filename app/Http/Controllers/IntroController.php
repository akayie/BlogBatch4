<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function show(){
        return view ('showui');
    }
    
    public function about(){
        return view ('about');
    }

    public function contact(){
        return view ('contact');
    }
}
