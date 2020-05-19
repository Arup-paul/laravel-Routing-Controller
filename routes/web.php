<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::name('frontend.')->namespace('Frontend')->group(function(){
Route::get('/','SampleController@index')->name('index');
// Route::get('/users','SampleController@contact')->name('users');
// Route::post('/users','SampleController@postUser');
// Route::get('/users/{id?}/{name?} ','SampleController@contact')->name('users.show');
});

 //group Route

 Route::name('backend.')->namespace('Backend')->prefix('Backend')->group(function(){
    Route::get('/','SampleController@index')->name('index');
   Route::get('/users','UserController@index')->name('users.index');
//    Route::get('/users/{id}','UserController@show')->name('users.show');


//    Route::get('/admin/create','AdminController@create')->name('admin.create');
//    Route::post('/admin','AdminController@process');
//    Route::get('/admin/{id}/edit','AdminController@edit');
//    Route::put('/admin/{id}','AdminController@edit');
//    Route::get('/admin/{id}','AdminController@show')->name('admin.show');
//    Route::delete('/admin/{id}','AdminController@show')->name('admin.delete');

//resource controller

Route::resource('posts','PostsController')->except(['destroy']);

 });


