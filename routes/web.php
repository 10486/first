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
Route::get('/','ShowController@home')->name('home');//ready
Route::get('/post/{id}','ShowController@post')->name('post');//ready
Route::get('/posts','ShowController@posts')->name('posts');//ready
Route::get('/aboutUs','ShowController@aboutUs')->name('aboutUs');//ready
Route::get('/actions','ShowController@actions')->name('actions');//ready
Route::get('/join','ShowController@join')->name('join');//ready
Route::get('/gallery','ShowController@gallery')->name('gallery');//ready
Route::get('/search','SearchController@search')->name('search');//ready
Route::match(['get','post'],'/login','LogController@login')->name('login');//ready
Route::match(['get','post'],'/feedback','FeedbackController@main')->name('feedback');//ready
Route::match(['get','post'],'/donate','ShowController@donate')->name('donate');//ready



Route::group(['middleware'=>'auth','prefix'=>'admin'],function () {
  Route::match(['get','post'],'/','AdminController@index')->name('admin');//ready
  Route::get('/posts','AdminController@posts')->name('adminPosts');//ready
  Route::match(['get','post'],'/post/{id}/edit','AdminPostController@edit')->name('edit');//ready
  Route::match(['get','post'],'/post/{id}/delete','AdminPostController@delete')->name('delete');//ready
  Route::match(['get','post'],'/post/add','AdminPostController@add')->name('add');//ready
  Route::get('/register','RegController@show')->name('registration');//ready
  Route::post('/register','RegController@register')->name('register');//ready
  Route::get('/logout','LogController@logout')->name('logout');//ready
});
