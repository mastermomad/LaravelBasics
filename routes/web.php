<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    $tasks=[
     'Go To Market',
     'Go To Store',
     'Go To Work'    
    ];

return view('welcome')->withTasks($tasks)->withFoo('My Website');
//     return view('welcome',[
//        'tasks'=>$tasks,
//        'foo'=>request('title')
//     ]);
 });
Route::get('/contact',function(){
    return view('contact');
});
Route::get('/about',function(){
    return view('about');
});