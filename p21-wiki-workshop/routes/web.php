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

Route::get('/','PostsController@index')->name('home');

Route::get('/posts/category/{cat_id?}','PostsController@index')->name('posts_by_cat');
//
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

// siuo buddu susidare visi linkai, store create show update ir tt

Route::resource('posts', 'PostsController');



Route::resource('categories', 'CategoriesController');

Route::get('admin','AdminController@index')->name('admin_index');
