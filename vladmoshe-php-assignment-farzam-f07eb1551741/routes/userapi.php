<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::GET('/users','UserController@index');
Route::GET('getPermission/{id}','UserController@getPermission');
Route::GET('show/{id}','UserController@show');
Route::POST('/create','UserController@create');
Route::PUT('update/{id}','UserController@update');
Route::POST('assignRole/{id}','UserController@assignR');
Route::POST('assignPermission/{id}','UserController@assignP');
Route::DELETE('delete/{id}','UserController@delete');

