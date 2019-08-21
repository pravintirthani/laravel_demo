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

Route::group(['middleware' => 'cors'], function() {

Route::post('product/findById','ProductController@findById');
Route::post('product/save','ProductController@save');
Route::post('product/update','ProductController@update');

Route::post('user/login','UserController@login');
Route::post('user/signUp','UserController@save');



Route::get('user/findById/{id}','UserController@findbyId');

});