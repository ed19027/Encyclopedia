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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/class/{class}', 'ClassController@show')->name('class.show');

Route::get('/class/{class}/systematic', 'ClassController@showSystematic')->name('class.showSystematic');

Route::get('/class/{class}/order/{order}', 'ClassController@showFamilies')->name('class.showFamilies');

Route::get('/class/{class}/family/{family}', 'ClassController@showSpecies')->name('class.showSpecies');

Route::get('/class/{class}/{specie}', 'ClassController@showSpecie')->name('class.showSpecie');

Route::resource('watch-later', 'WatchLaterController', ['only' => ['index']]);

Route::get('admin', 'AdminController');