<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\DB;

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
        $opinions = Article::where(['category' => 'public_opinion'])->orderBy('id','DESC')->get()->toArray();
        $campaigns = Article::where(['category' => 'campaigns'])->orderBy('id','DESC')->get()->toArray();
        return view('welcome', compact('page_title','opinions','campaigns'));
    }

    public function contact(){
        $page_title = "Contact Us";
        return view ('contact', compact('page_title'));
    }

    public function about(){
        $page_title = "About Us";
        return view ('about', compact('page_title'));
    }

    public function faq(){
        return view('faq');
    }

    public function privacy(){
        return view('privacy');
    }

    public function terms(){
        return view('terms');
    }

    public function how_to(){
        return view('how_to');
    }
}
