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
Route::prefix('puntoventa/admin')->group(function() {
    Route::get('/dashboard', 'Admin\DashboardController@dashboard')->name('puntoventa.admin.dashboard');

    Route::get('/sales', 'Admin\SalesController@index')->name('puntoventa.admin.sales');
    Route::get('/sales/invoice', 'Admin\SalesController@store')->name('puntoventa.admin.sales.invoice');
    Route::get('/sales/invoice/products', 'Admin\ProductsController@show')->name('puntoventa.admin.sales.invoice.products');
}); 
});
