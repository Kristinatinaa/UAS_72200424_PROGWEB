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
Route::get('/mhs', 'MhsController@mhs');

Route::get('/mhs/cari', 'MhsController@cari');

Route::get('/mhs/form', 'MhsController@form');

Route::POST('/mhs/simpan', 'MhsController@simpan');

Route::get('/mhs/editform/{id}','MhsController@editform');

Route::put('/mhs/update/{id}','MhsController@update'); 

Route::get('/mhs/deletemhs/{id}','MhsController@deletemhs'); 

Route::get('/user','AuthController@user');

Route::get('/user/formuser','AuthController@formuser');

Route::POST('/user/simpanuser', 'AuthController@simpanuser');

Route::get('/user/edituser/{id}','AuthController@edituser');

Route::put('/user/updateuser/{id}','AuthController@updateuser'); 

Route::get('/user/delete/{id}','AuthController@delete'); 

Route::get('/login', 'AuthController@login');

Route::POST('/user/cekLogin', 'AuthController@cekLogin');

Route::get('/logout', 'AuthController@logout');