<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Hero;
use App\Article;
use App\Situation;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function users(){
        $users = User::orderBy('id','DESC')->get()->toArray();
        return view('admin.users.all', compact('users'));
    }

    public function stats(){
        return view('admin.stats.all');
    }

    public function heros(){
      $heros = Hero::where(['type' => 'hero'])->orderBy('id','DESC')->get()->toArray();
      return view('admin.heros.all', compact('heros'));
    }

    public function shamed(){
      $shamed = Hero::where(['type' => 'shame'])->orderBy('id','DESC')->get()->toArray();
      return view('admin.heros.shamed', compact('shamed'));
    }

    public function situations(){
        $situations = Situation::get();
        return view('admin.situation.situation',compact('situations'));
    }

    public function campaigns(){
      $campaigns = Article::where(['category' =>'campaigns'])->get()->toArray();
      return view('admin.campaigns.all', compact('campaigns'));
    }

    public function rights(){
      $rights = Article::where(['category' =>'human_rights'])->get()->toArray();
      return view('admin.rights.all', compact('rights'));
    }

    public function opinions(){
      $opinions = Article::where(['category' =>'public_opinion'])->get()->toArray();
      return view('admin.opinions.all', compact('opinions'));
    }

    public function parliaments()
    {
      $parliament_dicussions =  Article::where(['category' =>'parliament_discussions'])->get()->toArray();
      return view('admin.parliament.all', compact('parliament_dicussions'));
    }

    public function blogs(){
      $blogs = Article::where(['category' =>'blogs'])->get()->toArray();
      return view('admin.blogs.all', compact('blogs'));
    }
}
