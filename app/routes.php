<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'root', 'uses' => 'HomeController@mainPage'));

Route::get('/auth/log_out', array('as' => 'auth.log_out', 'uses' => 'AuthController@logOut'));

Route::get('/auth/register', array('as' => 'auth.register', 'uses' => 'AuthController@showRegisterForm'));
Route::post('/auth/register', array('as' => 'auth.register', 'uses' => 'AuthController@registerUser'));

Route::get('/auth/sign_in', array('as' => 'auth.sign_in', 'uses' => 'AuthController@showSignInForm'));
Route::post('/auth/sign_in', array('as' => 'auth.sign_in', 'uses' => 'AuthController@signInUser'));

Route::get('/profile', array('as' => 'user.profile', 'uses' => 'ProfileController@index'));

Route::get('/product/{id}', array('as' => 'product.show', 'uses' => 'ProductController@show'));

Route::get('/ioc', array('as' => 'ioc', 'uses' => 'IocController@index'));

