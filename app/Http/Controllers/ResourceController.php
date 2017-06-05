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
        return Datatables::of(User::where(['deleted' => 0]))
        ->orderby('id','desc')
        ->addColumn('edit', function($user){
            return '<a title="Edit" href ="/admin/'.$user->id.'/user"><i class = "fa fa-pencil"></i></a>';
        })
        ->make(true);
    }

    public function get_blogs(){
        return Datatables::of(Article::where(['category' => 'blogs','deleted' => 0]))
        ->orderby('id','desc')
        ->addColumn('edit', function($blog){
            return '<a title="Edit" href ="/admin/'.$blog->id.'/article"><i class = "fa fa-pencil"></i></a>';
        })->make(true);
    }   

    public function get_heroes(){
        return Datatables::of(Hero::where(['type' => 'hero','deleted'=>0]))->orderby('id','desc')
        ->addColumn('edit', function($hero){
            return '<a title="Edit" href ="/admin/'.$hero->id.'/heros"><i class = "fa fa-pencil"></i></a>';
        })->make(true);
    }

    public function get_shames(){
        return Datatables::of(Hero::where(['type' => 'shame','deleted' => 0]))->orderby('id','desc')
        ->addColumn('edit', function($shame){
            return '<a title="Edit" href ="/admin/'.$shame->id.'/heros"><i class = "fa fa-pencil"></i></a>';
        })->make(true);
    }

    public function get_campaigns(){
        return Datatables::of(Article::where(['category' => 'campaigns','deleted' => 0]))->orderby('id','desc')
        ->addColumn('edit', function($blog){
            return '<a title="Edit" href ="/admin/'.$blog->id.'/article"><i class = "fa fa-pencil"></i></a>';
        })->make(true);
    }

    public function get_opinions(){
        return Datatables::of(Article::where(['category' => 'public_opinion','deleted' => 0]))->orderby('id','desc')
        ->addColumn('edit', function($blog){
            return '<a title="Edit" href ="/admin/'.$blog->id.'/article"><i class = "fa fa-pencil"></i></a>';
        })->make(true);
    }

    public function get_rights(){
        return Datatables::of(Article::where(['category' => 'human_rights','deleted' => 0]))->orderby('id','desc')
        ->addColumn('edit', function($blog){
            return '<a title="Edit" href ="/admin/'.$blog->id.'/article"><i class = "fa fa-pencil"></i></a>';
        })->make(true);
    }

    public function get_parliament_discussions(){
        return Datatables::of(Article::where(['category' => 'parliament_discussions','deleted' =>0]))->orderby('id','desc')
       ->addColumn('edit', function($blog){
            return '<a title="Edit" href ="/admin/'.$blog->id.'/article"><i class = "fa fa-pencil"></i></a>';
        })->make(true);
    }

    public function get_outgoing_sms(){
        return Datatables::of(Sms::where(['type' => 'Outgoing']))->make(true);
    }

    public function get_incoming_sms(){
        return Datatables::of(Sms::where(['type' => 'Incoming']))->orderby('id','desc')
        ->addColumn('edit', function($sms){
            return '<a title="Edit" href ="/user/'.$sms->id.'">s<i class = "fa fa-pencil"></i></a>';
        })->make(true);
    }

    public function get_situations(){
        return Datatables::of(Situation::where(['deleted' => 0]))->orderby('id','desc')
        ->addColumn('edit', function($situation){
            return '<a title="Edit" href ="/admin/'.$situation->id.'/situation"><i class = "fa fa-pencil"></i></a>';
        })->make(true);
    }

}
