<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function about(){
        return view('mytemplate.about');
    }
    public function post(){
        return view('mytemplate.post');
    }
    public function contact(){
        return view('mytemplate.contact');
    }
}
