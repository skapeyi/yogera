<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        return view('admin.heros.all');
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
