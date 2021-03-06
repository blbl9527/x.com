

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





Route::resource('work','WorkController');
Route::get('other/modifyworkitem','WorkController@getModify');


Route::resource('time','TimeController');
Route::get('other/modifytimeitem','TimeController@getModify');

Route::resource('post','PostController');
Route::resource('link','LinkController');

Route::get('other/modifyposts','PostController@getPostsModify');

Route::resource('area','AreaController');
Route::get('other/modifyareaitem','AreaController@getModify');

Route::resource('service','ServiceController');

Route::get('service/{sid}/{cid}','ServiceController@getDetail');
Route::get('other/towork/{sid}','ServiceController@toWork');

//consumer cancel a deal
Route::get('other/cancel/{sid}','ServiceController@cCancel'); 
//consumer terminate a deal
Route::get('other/terminate/{sid}','ServiceController@cTerminate');
//consumer comment 
Route::get('other/caddcomment/{id}','ConsumerController@getCommentForm'); 

Route::resource('comment','CommentController'); 

//producer terminate a deal 
Route::get('other/pterminate/{sid}','ServiceController@pTerminate');
//producer delete a serviceinfo
Route::get('other/pdelete/{sid}','ServiceController@pDelete');
//producer comment
Route::get('other/paddcomment/{id}','ProducerController@getCommentForm');