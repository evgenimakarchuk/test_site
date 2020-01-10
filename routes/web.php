<?php


Route::group(['middleware' => ['myapp']],function(){

Route::get('/','BaseController@getIndex')->middleware('lang');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home', 'HomeController@postindex');

//всегда последний
Route::get('/{url}','MaintextController@getIndex');
});



