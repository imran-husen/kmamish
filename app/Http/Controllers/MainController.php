<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
use App\Models\youtube;
use App\Models\blog;
use App\Models\education;
use App\Models\writing;
use App\Models\social;
use App\Models\polotics;
use App\Models\Events;
use App\Models\movements;
use App\Models\regular_events;


class MainController extends Controller

{

    // Creating the routing of the index page
    public function home(){

        // i will compact the data on here
        $latestNews = news::latest()->take(3)->get();
        $latestvideos = youtube::latest()->take(3)->get();
        $latestpic = regular_events::latest()->take(5)->get();
        return view('index',['latestNews' => $latestNews, 'latestvideos' => $latestvideos, 'latestpic' => $latestpic]);
    }
    //Routing for the test page 
    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    //This is the routings of the education life
    public function education(){
        return view('education', [
    'title' => 'About Us - K Mamish',
    'meta_description' => 'Explore the journey of K Mamish including education, writing, and political achievements.',
    'meta_keywords' => 'K Mamish, About, Biography, Education, Social Life, Political Life']);
    }

    // This is the rouyting of the write life
    public function writter(){
        return view('writter');
    }


    // Here i am write the code of the join us page
    public function join(){
        return view('join', [
    'title' => 'Join Us - Be a Part of the Movement',
    'meta_description' => 'Become a part of the mission. Join K Mamish and help create social and political change.',
    'meta_keywords' => 'Join K Mamish, volunteer, membership, political party'
    ]);
    }

    //This is the routing of the bloggings page
    public function blog(){

        // i will compact the data here
        $blog = blog::all();
        return view('blog', compact('blog'));
    }

    // It is dynamics page of the news portfolio
    public function news(){

       // Send the data to the news gallery
        $news = news::all();
        return view('news', compact('news'));
    }

    // I am writing the code for the youtube video gallery
    public function videos(){

        // I will compact the youtube link on the here
       $link = Youtube::all();
        return view('youtube', compact('link'));
    }

    // write the code for create a controller
    public function educational(){

        //This is methode to send the data
        $edu = education::latest()->get();
        return view('educational', compact('edu'));
       
    }

    //Writing the code for cantrolled the write page
    public function writer(){

        // I will send the data from here
        $writing = writing::latest()->get();
        return view('writter', compact('writing'));
    }

    //This is the routings of the social page
    public function social(){

        //Here i will compact some amount of teh data
        $social = social::latest()->get();
        return view('socila', compact('social'));
    }
    
     public function polotical(){

        // Return the data from dashboard
        $polo = polotics::latest()->get();
        return view('poltical', compact('polo'));
     }


    //  this is the controller of the events page
     public function events(){
        
        // compacting of the data
        $event = Events::latest()->get();
        return view('events', compact('event'));
     }

    //  This is teh routins of the movements
    public function movements(){


        //This is compacting the data
        $move = movements::latest()->get();
        return view('movements', compact('move'));
    }

    // This is routing of the family bg 
     public function family()
    {
        return view('familybg');
    }

}
