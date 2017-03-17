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

Route::get('/', function () {
    return view('hello');
});

Route::resource('test','TestController');  //debug

Route::resource('producer','ProducerController');
Route::resource('consumer','ConsumerController');

Route::controller('login','LoginController');



Route::get('other/modifyppw','ProducerController@getModifyPW');
Route::get('other/modifycpw','ConsumerController@getModifyPW');

Route::get('other/modifypme','ProducerController@getModifyMe');
Route::get('other/modifycme','ConsumerController@getModifyMe');
Route::get('other/modifyapw','AdminController@getModifyPW');

Route::get('other/pcreate','ProducerController@getCreate');


Route::resource('admin','AdminController');
Route::get('other/sitecomment','CommonController@sitecomment');


Route::resource('work','WorkController');
Route::get('other/worktype/{type?}','WorkController@getWorkType');


Route::get('other/showp/{id}','ProducerController@getShow');
Route::get('other/showc/{id}','ConsumerController@getShow');

Route::get('other/caddcomment/{id}','ConsumerController@getCommentForm');
Route::get('other/paddcomment/{id}','ProducerController@getCommentForm');

