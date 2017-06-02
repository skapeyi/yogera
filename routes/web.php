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
Route::get('/reported-situations', 'SituationController@reported');

Route::get('/campaigns','ArticleController@campaigns');

Route::get('/admin','AdminController@users');
Route::get('/admin/{id}/user', 'AdminController@editUser');
Route::put('/admin/{id}/user', array('as' => 'user.manage','uses' => 'AdminController@updateUser'));
Route::get('/admin/heros', 'AdminController@heros');
Route::get('/admin/shames', 'AdminController@shamed');

Route::get('/admin/{id}/heros','AdminController@editHero');
Route::put('/admin/{id}/heros', array('as' => 'hero.manage','uses' => 'AdminController@updateHero'));

Route::get('/admin/situations', 'AdminController@situations');
Route::get('/admin/articles', 'AdminController@articles');
Route::get('/admin/stats','AdminController@stats');
Route::get('/admin/campaigns','AdminController@campaigns');
Route::get('/admin/rights','AdminController@rights');
Route::get('/admin/opinions', 'AdminController@opinions');
Route::get('/admin/parliament','AdminController@parliaments');
Route::get('/admin/blogs','AdminController@blogs');

Route::get('/admin/{id}/article','AdminController@editArticle');
Route::put('/admin/{id}/article', array('as' => 'article.manage','uses' => 'AdminController@updateArticle'));

Route::get('/admin/incoming-sms','SmsController@incoming_sms');
Route::get('/admin/outgoing-sms','SmsController@outgoing_sms');

//Resources
Route::get('/get_users','ResourceController@get_users');
Route::get('/get_blogs','ResourceController@get_blogs');
Route::get('/get_heroes','ResourceController@get_heroes');
Route::get('/get_shames','ResourceController@get_shames');
Route::get('/get_campaigns','ResourceController@get_campaigns');
Route::get('/get_opinions','ResourceController@get_opinions');
Route::get('/get_rights','ResourceController@get_rights');
Route::get('/get_parliament_discussions','ResourceController@get_parliament_discussions');
Route::get('/get_situations','ResourceController@get_situations');
Route::get('/get_incoming_sms','ResourceController@get_incoming_sms');
Route::get('/get_outgoing_sms','ResourceController@get_outgoing_sms');

//pages
Route::get('/privacy','HomeController@privacy');
Route::get('/faq', 'HomeController@faq');
Route::get('/terms-and-conditions','HomeController@terms');

//sms
Route::post('/send_single_sms','SmsController@send_single_sms');
Route::post('/send_bulk_sms','SmsController@send_bulk_sms');
Route::post('/ait_delivery_call_back','SmsController@ait_delivery_call_back');
Route::post('/shortcode_message_call_back','SmsController@shortcode_message_call_back');

