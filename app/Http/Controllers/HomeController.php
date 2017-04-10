<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = "Be Heard";
        $opinions = "";
        return view('welcome', compact('page_title'));
    }

    public function contact(){
        $page_title = "Contact Us";
        return view ('contact', compact('page_title'));
    }

    public function about(){
        $page_title = "About Us";
        return view ('about', compact('page_title'));
    }
}
