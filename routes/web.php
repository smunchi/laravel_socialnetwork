<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/signup','UserController@postSignup')->name('signup');
Route::post('/signin', 'UserController@postSignin')->name('signin');
Route::post('/createpost', 'PostController@postCreatePost')->name('post.create');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'PostController@getDashboard')->name('dashboard');
    Route::get('/delete-post/{post_id}', 'PostController@getDeletePost')->name('post.delete');
});