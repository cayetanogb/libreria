<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('libro', 'BookController@index')->name('libro');

Route::get('libro/show/{id}', 'BookController@show')->name('show');

Route::get('libro/create', 'BookController@create')->name('create');

Route::post('libro/create', 'BookController@store')->name('store');

Route::get('libro/edit/{id}', 'BookController@edit')->name('edit');
