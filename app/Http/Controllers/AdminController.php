<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Hero;
use App\Article;
use App\Situation;
use Log;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function stats(){
        return view('admin.stats.all');
    }

    public function users(){
        $users = User::orderBy('id','DESC')->get()->toArray();
        return view('admin.users.all', compact('users'));
    }

    public function editUser($id){
      $user = User::find($id);
      return view('admin.users.edit', compact('user'));
    }

    public function updateUser(Request $request, $id){
      Log::info($request);
      $user = User::find($id);
      $user->deleted = $request->deleted;
      $user->approved = $request->deleted;

      if($user->save()){
        flash()->success('Account updated');
        return redirect('/admin');
      }
      else{
        flash()->error('Something went wrong, try again later!');
      }
    }    

    public function heros(){
      $heros = Hero::where(['type' => 'hero'])->orderBy('id','DESC')->get()->toArray();
      return view('admin.heros.all', compact('heros'));
    }

    public function shamed(){
      $shamed = Hero::where(['type' => 'shame'])->orderBy('id','DESC')->get()->toArray();
      return view('admin.heros.shamed', compact('shamed'));
    }

    public function editHero($id){
      $hero = Hero::find($id);
      return view('admin.heros.view', compact('hero'));
    }

    public function updateHero(Request $request, $id){
      Log::info($request);
      $hero = Hero::find($id);
      $hero->approved = $request->approved;
      $hero->deleted = $request->deleted;

      if($hero->save()){
        flash()->success('Details updated');
        return redirect("/admin/$id/heros");
      }
      else{
        flash()->error('Something went wrong');
        return redirect("/admin/$id/heros");
      }
    }

    public function situations(){
        $situations = Situation::get();
        return view('admin.situation.situation',compact('situations'));
    }

    public function editSituation($id){
      $situation = Situation::find($id);
      return view('admin.situation.view', compact($situation));
    }

    public function updateSituation(Request $request, $id){

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

    public function editArticle($id){
      $article = Article::find($id);
      return view('admin.blogs.view', compact('article'));
    }

    public function updateArticle(Request $request, $id){
      $article = Article::find($id);
      $article->deleted = $request->deleted;
      $article->approved = $request->approved;
      $article->content = $request->content;
      $article->title = $request->title;
      $article->category = $request->category;

      if($article->save()){
        flash()->success('Details updated');
        return redirect("/admin/$id/article");
      }
      else{
        flash()->error('Something went wrong');
        return redirect("/admin/$id/article");
      }
    }
}
