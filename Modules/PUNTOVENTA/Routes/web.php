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
Route::middleware(['lang'])->group(function(){
Route::prefix('puntoventa')->group(function() {
    Route::get('/index', 'PUNTOVENTAController@index')->name('cefa.puntoventa.index');

    Route::get('/developers', 'PUNTOVENTAController@developers')->name('cefa.puntoventa.developers');
});
});
