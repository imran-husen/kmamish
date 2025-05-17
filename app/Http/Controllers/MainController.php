<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //Routing for the test page 
    public function test(){
        return view('test');
    }

    //This is the routings of the education life
    public function education(){
        return view('education');
    }

    // This is the rouyting of the write life
    public function writter(){
        return view('writter');
    }

    // This is the roting of the social life
    public function social(){
        return view('social');
    }

    // This is the routing of the polotical page
    public function polotical(){
        return view('polotical');
    }

    // Here i am write the code of the join us page
    public function join(){
        return view('join');
    }


}
