<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Hero;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function users(){
        $users = User::all()->toArray();
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
        return view('admin.heros.all');
    }

    public function campaigns(){
      return view('admin.heros.situations');
    }

    public function rights(){
      return view('admin.rights.all');
    }

    public function opinions(){
      return view('admin.rights.all');
    }

    public function parliaments()
    {
      return view('admin.parliament.all');
    }

    public function blogs(){
      return view('admin.blogs.all');
    }
}
