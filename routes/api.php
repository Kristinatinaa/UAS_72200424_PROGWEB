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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/mhs/all','MhsAPIController@all');

Route::post('/mhs/create','MhsAPIController@create');

Route::post('/mhs/update/{id}','MhsAPIController@update');

Route::DELETE('/mhs/delete/{id}','MhsAPIController@delete');