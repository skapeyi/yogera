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
        return Datatables::of(User::query())
        ->orderby('id','desc')
        ->addColumn('edit', function($user){
            return '<a title="Edit" href ="/admin/'.$user->id.'/user"><i class = "fa fa-pencil"></i></a>';
        })
        ->make(true);
    }

    public function get_blogs(){
        return Datatables::of(Article::where(['category' => 'blogs']))
        ->orderby('id','desc')
        ->addColumn('edit', function($blog){
            return '<a title="Edit" href ="/admin/'.$blog->id.'">s<i class = "fa fa-pencil"></i></a>';
        })->make(true);
    }   

    public function get_heroes(){
        return Datatables::of(Hero::where(['type' => 'hero']))->orderby('id','desc')
        ->addColumn('edit', function($hero){
            return '<a title="Edit" href ="/admin/'.$hero->id.'/heros"><i class = "fa fa-pencil"></i></a>';
        })->make(true);
    }

    public function get_shames(){
        return Datatables::of(Hero::where(['type' => 'shame']))->orderby('id','desc')
        ->addColumn('edit', function($shame){
            return '<a title="Edit" href ="/admin/'.$shame->id.'/heros"><i class = "fa fa-pencil"></i></a>';
        })->make(true);
    }

    public function get_campaigns(){
        return Datatables::of(Article::where(['category' => 'campaigns']))->orderby('id','desc')
        ->addColumn('edit', function($campaign){
            return '<a title="Edit" href ="/user/'.$campaign->id.'">s<i class = "fa fa-pencil"></i></a>';
        })->make(true);
    }

    public function get_opinions(){
        return Datatables::of(Article::where(['category' => 'public_opinion']))->orderby('id','desc')
        ->addColumn('edit', function($opinion){
            return '<a title="Edit" href ="/user/'.$opinion->id.'">s<i class = "fa fa-pencil"></i></a>';
        })->make(true);
    }

    public function get_rights(){
        return Datatables::of(Article::where(['category' => 'human_rights']))->orderby('id','desc')
        ->addColumn('edit', function($right){
            return '<a title="Edit" href ="/user/'.$right->id.'">s<i class = "fa fa-pencil"></i></a>';
        })->make(true);
    }

    public function get_parliament_discussions(){
        return Datatables::of(Article::where(['category' => 'parliament_discussions']))->orderby('id','desc')
        ->addColumn('edit', function($discussion){
            return '<a title="Edit" href ="/user/'.$discussion->id.'">s<i class = "fa fa-pencil"></i></a>';
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
        return Datatables::of(Situation::query())->orderby('id','desc')
        ->addColumn('edit', function($Situation){
            return '<a title="Edit" href ="/user/'.$situation->id.'">s<i class = "fa fa-pencil"></i></a>';
        })->make(true);
    }

}
