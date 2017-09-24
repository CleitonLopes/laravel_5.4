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

Route::get('hello/{name?}', 'HelloController@index')->name('hello.index');

Route::post('hello/{name?}', 'HelloController@render');

// Formato usado até o laravel 5.3
/*Route::group(['prefix' => 'admin', 'middleware'=>['auth']], function () {

    Route::resource('pages', 'Admin\PagesController');

});*/

// Novo formato
// Caso há outras rotas protegidas, adicionar no group
Route::prefix('admin')
    ->middleware(['auth'])
    ->group(function () {
        Route::resource('pages', 'Admin\PagesController');
    });


// Criado pelo comanto php artisan make:auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
