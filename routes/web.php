<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function(){
         echo 'Tech mal';
});        

Route::get('/about',function(){
        return view('aboutus');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/about', 'pagesController@indexaboutus');
Route::get('/contact','pagesController@indexcontact');