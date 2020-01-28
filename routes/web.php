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
Route::get('/','PageController@home');
Route::get('/students','PageController@students');
Route::get('/cycles','PageController@cycles');
Route::get('/courses','PageController@courses');
Route::get('/branches','PageController@branches');
Route::get('/payments','PageController@payments');
Route::get('/status','PageController@status');
Route::get('/careers','PageController@careers');
Route::get('/salesman','PageController@salesman');
Route::get('/jobs','PageController@jobs');
Route::get('/reports','PageController@reports'); 
