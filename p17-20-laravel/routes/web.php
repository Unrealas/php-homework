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


Route::get('/', 'PageController@index')->name("home");

Route::get('/page', 'PageController@index')->name("main_page");

Route::any('/post/create',  'PageController@create')->name("create_post");

Route::get('/page/about', 'PageController@about')->name("about_page");
Route::post('/post/delete/{id}', 'PageController@deletePost')->name('delete_post');