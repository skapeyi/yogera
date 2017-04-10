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
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/about-us', 'HomeController@about');
Route::get('/contact','HomeController@contact');

Route::get('/blog','ArticleController@blog');
Route::get('/know-your-rights','ArticleController@rights');
Route::resource('/articles','ArticleController');

Route::get('/celebrate-a-person', 'HeroController@create');
Route::get('/heros', 'HeroController@heros');
Route::post('heros', 'HeroController@store');

Route::get('/shame-a-person', 'HeroController@createShame');
Route::get('/corrupt-officials','HeroController@shamed');

Route::get('/situation','SituationController@create');
Route::post('/situation','SituationController@store');

Route::get('/campaigns','ArticleController@campaigns');

Route::get('/admin','AdminController@users');
Route::get('/admin/heros', 'AdminController@heros');
Route::get('/admin/shames', 'AdminController@shamed');
Route::get('/admin/situations', 'AdminController@situations');
Route::get('/admin/articles', 'AdminController@articles');
Route::get('/admin/stats','AdminController@stats');
Route::get('/admin/campaigns','AdminController@campaigns');
Route::get('/admin/rights','AdminController@rights');
Route::get('/admin/opinions', 'AdminController@opinions');
Route::get('/admin/parliament','AdminController@parliaments');
Route::get('/admin/blogs','AdminController@blogs');
