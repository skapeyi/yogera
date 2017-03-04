<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use Illuminate\Support\Facades\Auth;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/admin/users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('heros.create');
    }

    public function shame()
    {
        return view('heros.shame');
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
        $hero = new Hero();
        $hero->type = $request->type;
        $hero->person = $request->person;
        $hero->sector = $request->sector;
        $hero->organisation = $request->organization;
        $hero->region = $request->region;
        $hero->gender = $request->gender;
        $hero->reason = $request->reason;
        $hero->created_by = $user_id;

        if($hero->save()){
          flash("Your information has been saved and will be visible once approved!","success");
          return redirect('/heros');
        }
        else{
          flash("Something went wrong while processing your request, please try again later.","error");
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

    public function heros(){
      $heros = Hero::where(['type' =>'hero'])->get()->toArray();
      return view('heros.all', compact('heros'));
    }

    public function shamed(){
      $heros = Hero::where(['type' =>'shame'])->get()->toArray();
      return view('heros.shamed', compact('heros'));
    }

    public function situations()
    {
      return view('situations.all');
    }
}
