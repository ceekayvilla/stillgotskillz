<?php
use App\Http\Controllers\Backend\CategoryController;

Route::group(['prefix'=>'admin'], function(){


    /* categories */
    Route::group( ['prefix'=>'categories'], function(){
        Route::get('/',       [CategoryController::class, 'index'])->name('admin.categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('{id}/edit',   [CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::post('/update',[CategoryController::class, 'update'])->name('admin.categories.update');
        Route::get('{id}/delete', [CategoryController::class, 'delete'])->name('admin.categories.delete');
        Route::get('/trash', [CategoryController::class, 'trash'])->name('admin.categories.trash');
        Route::get('{id}/restore', [CategoryController::class, 'restore'])->name('admin.categories.restore');
    });
});


