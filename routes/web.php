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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('peoples','PeoplesController');

Route::resource('interests','InterestsController');
Route::resource('roles','RolesController');
Route::resource('languages','LanguagesController');
Route::resource('users','UsersController');



 Route::get('peoples/create', 'PeoplesController@create')->name('peoples.create');;
