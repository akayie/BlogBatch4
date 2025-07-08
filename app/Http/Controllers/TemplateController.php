<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{ 
   public function index(){
    $todos = [
        [
            "title" => 'Learn Laravel',
            "body" => 'Laravel is a web application framework with expressive, elegant syntax. Laravel is a tool to help you create strong, beautiful applications using the PHP programming language.'
        ],
        [
            "title" => 'Learn Vue',
            "body" => 'Vue is a progressive framework for building user interfaces.'
        ],
        [ 
            "title" => 'Learn React',
            "body" => 'React makes it painless to create interactive UIs.'
        ],
    ];

    return view('mytemplate.index', compact('todos'));
}
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
