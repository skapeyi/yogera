<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


    public function discussions(){
        $discussions = Discussion::all()->toArray();
        return view('admin.discussions.all',compact('discussions'));
    }

    public function information(){
        $information = Information::all()->toArray();
        return view('admin.information.all', compact('information'));
    }

}
