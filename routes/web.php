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

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('/signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController', ['except' => ['create']]);

Route::post('/signin', 'SessionsController@store')->name('signin');
Route::delete('/signout', 'SessionsController@destroy')->name('signout');

Route::get('password/email', 'Auth\ResetPasswordController@getEmail')->name('password.reset');
Route::post('password/email', 'Auth\ResetPasswordController@postEmail')->name('password.reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@getReset')->name('password.edit');
Route::post('password/reset', 'Auth\ResetPasswordController@postReset')->name('password.update');

Route::resource('statuses', 'StatusesController');

Route::get('/users/{id}/followings', 'UsersController@followings')->name('users.followings');
Route::get('/users/{id}/followers', 'UsersController@followers')->name('users.followers');

Route::post('/users/followers/{id}', 'FollowersController@store')->name('followers.store');
Route::delete('/users/followers/{id}', 'FollowersController@destroy')->name('followers.destroy');