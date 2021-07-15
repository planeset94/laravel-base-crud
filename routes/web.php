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
//Leggere tutti i dati - READ
Route::get('comics', 'Comic_Controller@index')->name('comics.index');


//Leggere dati specifici
Route::get('comics{comic}', 'Comic_Controller@show')->name('comics.show');




// Creare il form che serve a registare nuovi dati
Route::get('comics/create','Comic_Controller@create')->name('comics.create');

//Registrare un nuovo dato
Route::post('comics', 'Comic_Controller@store')->name('comics.store');