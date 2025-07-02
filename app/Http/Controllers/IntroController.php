<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function show(){
        $todos = [
            'Learn Laravel',
            'Learn Vue',
            'Learn Inertia'
        ];
        $title ='Hello Laravel , This is showUi.';
        return view ('showui', compact('todos','title'));
    }
    
    public function testfun(){
        return view('test.testui');
    } 
        
}
