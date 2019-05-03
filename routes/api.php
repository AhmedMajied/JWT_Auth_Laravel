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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('login','API\LoginController@login');
Route::post('register','API\RegisterController@register');

Route::group(['middleware' => ['jwt.auth']], function () {
    Route::get('users','API\UserController@index');
});
//Route::middleware('jwt.auth')->get('users','API\UserController@index');


Route::post('test','Auth\LoginController@postLogin');