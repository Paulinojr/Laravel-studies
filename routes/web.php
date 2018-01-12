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

Route::get('/', 'PostsController@index')->name('home');

//Route for creating posts
Route::get('/posts/create', 'PostsController@create');

//Route for post storing
Route::post('/posts', 'PostsController@store');

//Route for showing the post
Route::get('/posts/{post}', 'PostsController@show');

//Route for submitting a comment
Route::post('/posts/{post}/comments', 'CommentsController@store');

//Route for registering a user
Route::get('/register', 'RegistrationController@create');

//Route for login
Route::get('/login', 'SessionsController@create');

//Route for posting to login
Route::post('/login', 'SessionsController@store');

//Route for posting in register
Route::post('/register', 'RegistrationController@store');

//Route for getting a logout
Route::get('logout', 'SessionsController@destroy');
