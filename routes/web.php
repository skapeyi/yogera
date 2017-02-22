<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/about-us', 'HomeController@about');
Route::get('/heros', 'HeroController@index');
Route::post('heros', 'HeroController@store');
Route::get('/situation','SituationController@index');
Route::post('/situation','SiutationController@store');
Route::get('/contact','HomeController@contact');

