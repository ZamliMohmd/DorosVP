<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerachController extends Controller
{
    public function index(){
        return view('website.search');
    }
}
