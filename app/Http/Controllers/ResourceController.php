<?php

namespace App\Http\Controllers;

use App\Article;
use App\Hero;
use App\Right;
use App\Situation;
use App\User;
use App\Sms;
use Datatables;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function get_users(){
        return Datatables::of(User::query())->make(true);
    }

    public function get_blogs(){
        return Datatables::of(Article::where(['category' => 'blogs']))->make(true);
    }   

    public function get_heroes(){
        return Datatables::of(Hero::where(['type' => 'hero']))->make(true);
    }

    public function get_shames(){
        return Datatables::of(Hero::where(['type' => 'shame']))->make(true);
    }

    public function get_campaigns(){
        return Datatables::of(Article::where(['category' => 'campaigns']))->make(true);
    }

    public function get_opinions(){
        return Datatables::of(Article::where(['category' => 'public_opinion']))->make(true);
    }

    public function get_rights(){
        return Datatables::of(Article::where(['category' => 'human_rights']))->make(true);
    }

    public function get_parliament_discussions(){
        return Datatables::of(Article::where(['category' => 'parliament_discussions']))->make(true);
    }

    public function get_outgoing_sms(){
        return Datatables::of(Sms::where(['type' => 'Outgoing']))->make(true);
    }

    public function get_incoming_sms(){
        return Datatables::of(Sms::where(['type' => 'Incoming']))->make(true);
    }

    public function get_situations(){
        return Datatables::of(Situation::query())->make(true);
    }

}
