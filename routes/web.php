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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PublicController@index');

Route::get('/new-post', 'PostController@renderForm');

Route::post('/publish', 'PostController@store');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/post/{post}', 'PublicController@showPost');

Route::post('/post/{post}/comment', 'CommentController@addComment');

Route::get('/admin', 'PostController@dashboard');

Route::get('/{cats}', 'PublicController@showCat');


Route::get('/post/{post}/edit', 'PostController@postEdit');

Route::patch('/post/{post}/update', 'PostController@postUpdateStore');

Route::get('/post/{post}/delete', 'PostController@postDelete');




