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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'cors'], function() {

Route::post('product/findById','ProductController@findById');
Route::post('product/save','ProductController@save');
Route::post('product/update','ProductController@update');

Route::post('user/login','UserController@login');
Route::post('user/signUp','UserController@save');



Route::get('user/findById/{id}','UserController@findbyId');

});
    
