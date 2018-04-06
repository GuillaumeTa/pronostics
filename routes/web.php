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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pronostics', 'PronosticsController@index')->name('pronostics');
Route::get('/resultat', 'ResultatController@index')->name('resultat');
Route::get('/classement', 'ClassementController@index')->name('classement');

