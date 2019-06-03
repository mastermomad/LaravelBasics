<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{    
    //create a function  to return view
    public function home(){
    	$tasks=[
     'Go To Market',
     'Go To Store',
     'Go To Work'    
    ];
    	return view('welcome',[
            'foo'=>'bar',
            'tasks'=>$tasks
    	]);
    }

    public function about(){
    	return view('about');
    }

    public function contact(){
    	return view('contact');
    }
}
