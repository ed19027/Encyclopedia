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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{class}', 'ClassController@show')->name('class.show');

Route::get('/{class}/systematic', 'ClassController@index')->name('class.index');

Route::get('/{family}', 'FamilyController@show')->name('family.index');
