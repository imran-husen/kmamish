<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //Routing for the test page 
    public function test(){
        return view('test');
    }
}
