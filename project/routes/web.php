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

// {nome?} informa que existe um valor padrão
//Route::get('/hello/{name?}', function ($name = 'ze') {
//
//    return 'Hello ' . $name;
//
//});

// Controllers

Route::get('hello/{name?}', 'HelloController@index');

Route::post('hello/{name?}', 'HelloController@render');

Route::resource('pages', 'Admin\PagesController');