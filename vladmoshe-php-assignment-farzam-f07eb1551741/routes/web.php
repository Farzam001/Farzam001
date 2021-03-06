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
Route::GET('/home', 'HomeController@index')->name('home');

Route::GET('/users','UserController@index')->name('users');
Route::GET('show/{id}','UserController@show')->name('show');
Route::PUT('update/{id}','UserController@show')->name('update');
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');});
