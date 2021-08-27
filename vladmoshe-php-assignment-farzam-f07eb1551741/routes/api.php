<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::GET('/users','UserController@index')->name('users');
Route::GET('show/{id}','UserController@show')->name('show');
Route::POST('/create','UserController@create');
Route::PUT('update/{id}','UserController@update')->name('update');
Route::DELETE('delete/{id}','UserController@delete')->name('delete');
Route::GET('/roles','RoleController@index')->name('roles');
Route::resource('roles', 'RoleController');
Route::resource('users', 'UserController');

