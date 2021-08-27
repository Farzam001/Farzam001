<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::GET('/teams','TeamController@index');
Route::GET('show/{id}','TeamController@show');
Route::POST('/create','TeamController@create');
Route::PUT('update/{id}','TeamController@update');
Route::DELETE('delete/{id}','TeamController@destroy');




