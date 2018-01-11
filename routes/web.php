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

Route::get('/', 'PostsController@index');

//Route for creating posts
Route::get('/posts/create', 'PostsController@create');

//Route for post storing
Route::post('/posts', 'PostsController@store');

//Route for showing the post
Route::get('/posts/{post}', 'PostsController@show');
