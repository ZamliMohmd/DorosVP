<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminpanelController extends Controller
{
    public function index(){
        //return "<h1>Welcome to Admin panel</h1>";
        return view('dashboard.index');
    }
}
