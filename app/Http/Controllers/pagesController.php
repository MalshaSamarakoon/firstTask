<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function indexaboutus(){
        return view('aboutus');
}

    public function indexcontact(){
             return view('contact');
    }
    
}
