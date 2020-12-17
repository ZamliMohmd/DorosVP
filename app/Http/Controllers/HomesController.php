<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function terms(){
        return view('website.terms');
    }

    public function about(){
        return view('website.about');
    }
    public function privacy(){
        return view('website.about');
    }
}
