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

Route::get('/', 'ClienteController@index');

Route::get('/create_cliente', 'ClienteController@create');
Route::post('/create_cliente', 'ClienteController@store');

Route::get('/edit_cliente/{id}', 'ClienteController@edit');
Route::post('/edit_cliente/{id}', 'ClienteController@update');

Route::get('/deleta_cliente/{id}', 'ClienteController@destroy');

