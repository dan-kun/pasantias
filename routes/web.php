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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/proveedor', 'HomeController@proveedor')->name('proveedor');
Route::get('/ordencompra', 'HomeController@ordencompra')->name('ordencompra');
Route::get('/pendientegsi', 'HomeController@pendientegsi')->name('pendientegsi');
Route::get('/porcargar', 'HomeController@porcargar')->name('porcargar');
Route::get('/porenviar', 'HomeController@porenviar')->name('porenviar');
Route::get('/cargado', 'HomeController@cargado')->name('cargado');
Route::get('/proveedores', ['as' => 'proveedores', 'users' => 'HomeController@proveedor']);
