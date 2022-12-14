<?php
use Illuminate\Support\Facades\Route;
use Modules\CPD\Http\Controllers\StudyController;

Route::middleware(['lang'])->group(function(){
    Route::prefix('cpd')->group(function() {

    // Studies
        Route::get('/admin/study/index', [StudyController::class, 'index'])->name('cpd.admin.study.index');
        // Add
        Route::get('/admin/study/add', [StudyController::class, 'addGet'])->name('cpd.admin.study.add');
        Route::post('/admin/study/add', [StudyController::class, 'addPost'])->name('cpd.admin.study.add');
        // Update
        Route::get('/admin/study/update/{id}', [StudyController::class, 'updateGet'])->name('cpd.admin.study.update');
        Route::post('/admin/study/update', [StudyController::class, 'updatePost'])->name('cpd.admin.study.update');
        // Detail
        Route::get('/admin/study/detail/{id}', [StudyController::class, 'detailGet'])->name('cpd.admin.study.detail');
        // Delete
        Route::get('/admin/study/delete/{id}', [StudyController::class, 'deleteGet'])->name('cpd.admin.study.delete');
        Route::post('/admin/study/delete', [StudyController::class, 'deletePost'])->name('cpd.admin.study.delete');

    });
});
