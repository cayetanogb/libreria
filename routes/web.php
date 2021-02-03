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

Route::get('libros', 'BookController@index');

Route::get('libros/{id}', 'BookController@show');

Route::get('libros/crear', 'BookController@create');

Route::post('libros/crear', 'BookController@store');
