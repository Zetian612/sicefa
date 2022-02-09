<?php
use Illuminate\Support\Facades\Route;
use Modules\SICA\Http\Controllers\security\SecurityController;

Route::middleware(['lang'])->group(function(){

    Route::prefix('sica')->group(function() {

        Route::get('/admin/security/apps', 'SecurityController@apps')->name('sica.admin.security.apps');

        Route::get('/admin/security/roles', 'SecurityController@roles')->name('sica.admin.security.roles');

        Route::get('/admin/security/users', 'SecurityController@users')->name('sica.admin.security.users');
    
    });  

}); 