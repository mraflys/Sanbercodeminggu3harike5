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

Route::get('/master', function () {
    return view('adminlte/master');
});

Route::get('/items', function () {
    return view('items/index');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/data-tables', function () {
    return view('data-tables');
});

Route::get('/cast/create', 'CastContoller@create');

Route::get('/cast', 'CastContoller@index');

Route::post('/cast', 'CastContoller@store');

Route::get('/cast/{id}', 'CastContoller@show');

Route::get('/cast/{id}/edit', 'CastContoller@edit');
Route::put('/cast/{id}', 'CastContoller@update');
Route::delete('/cast/{id}', 'CastContoller@destroy');