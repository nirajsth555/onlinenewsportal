<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','usercontroller@getIndex');

 Route::controller('admin','admincontroller');
// Route::controller('user','usercontroller');
Route::get('onlinenews/{id}','usercontroller@getShowfullnews');
Route::get('category-archive/{id}','usercontroller@getShowfullcategory');
Route::get('contact_us','usercontroller@getContact');
Route::get('message_us','usercontroller@postContact');
 Route::controller('category','categorycontroller');
 Route::controller('news','newscontroller');
 Route::group(['middleware'=>['web']],function()
 {
 Route::controller('login','logincontroller');
 Route::controller('forgotpassword','forgotpassword');
 }); //yesle validate ko error pathaune kam garxa
 Route::controller('login','logincontroller');
 Route::auth();

 Route::get('/home', 'HomeController@index');
 Route::controller('advertisement','advertisementcontroller');
 Route::controller('headline','headline');
 Route::get('subscribe','usercontroller@getSubscribers');