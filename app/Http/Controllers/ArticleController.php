<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articles/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(Auth::check()){
        $user_id = Auth::user()->id;
      }
      else{
        $user_id = 2;
      }

      $article = new Article();
      $article->created_by = $user_id;
      $article->title = $request->title;
      $article->category = $request->category;
      $article->content = $request->content;
      if(empty($request->external_url)){
        $article->external_url = "#";
      }
      else{
        $article->external_url = "#";
      }
      // Set banner url and attachment url to # for now
      $article->banner_url = "#";
      $article->attachment_url = "#";

      if($article->save()){
        flash("Your information has been saved and will be visible once approved!","success");
        return redirect('/');
      }
      else{
        flash("Something went wrong while processing your request, please try again later.","error");
        // go back to previous page!
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function rights()
    {
      $rights = Article::where(['category' => 'human_rights'])->orderBy('id','DESC')->get()->toArray();
      return view('rights.all', compact('rights'));
    }

    public function blog()
    {
      $blogs = Article::where(['category' => 'blogs'])->orderBy('id','DESC')->get()->toArray();
      return view('articles.blog', compact('blogs'));
    }

    public function campaigns()
    {
        $campaigns = Article::where(['category' => 'campaigns'])->orderBy('id','DESC')->get()->toArray();
        return view('articles.campaigns',compact('campaigns'));
    }

}
