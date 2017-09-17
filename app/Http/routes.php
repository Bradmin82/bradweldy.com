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
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('home', ['as' => 'blog.home', 'uses' => 'BlogController@getBlogHome']); 
Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogController@getIndex']);
// Authentication Routes
Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

//Registration Routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// Password reset link request routes...
Route::get('password/email', ['as' => 'email', 'uses' => 'Auth\PasswordController@getEmail']);
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token?}', ['as' => 'reset', 'uses' => 'Auth\PasswordController@getReset']);
Route::post('password/reset', 'Auth\PasswordController@postReset');

// Categories
Route::resource('categories', 'CategoryController', ['except' => ['create']]);



Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex');
Route::resource('posts', 'PostController');
//Route::resource('blog', 'BlogController');

/*Application Routes */

Route::group(['middleware' => ['web']], function() {
	//
});