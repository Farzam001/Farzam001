<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::GET('/roles','RoleController@index');
Route::GET('show/{id}','RoleController@show');
Route::POST('/create','RoleController@create');
Route::POST('giveP/{id}','RoleController@giveP');
Route::PUT('update/{id}','RoleController@update');
Route::DELETE('delete/{id}','RoleController@destroy');




