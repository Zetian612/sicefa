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

Route::prefix('radiocefa')->group(function() {
    
    Route::get('/index', 'RADIOCEFAController@index')->name('inicioRadio');

    Route::get('/peticiones', 'RadioRouteController@PetMusica')->name('peticiones');

     Route::get('/cronograma', 'RADIOCEFAController@cronograma')->name('cronograma');

     Route::get('/votes', 'RADIOCEFAController@votaciones')->name('votaciones');

     Route::get('/sobrenosotros', 'RADIOCEFAController@aboutUs')->name('aboutus');


});
