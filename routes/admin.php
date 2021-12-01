<?php
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\ParticipantController;
use App\Http\Controllers\Backend\LoginController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

Route::group(['prefix'=>'admin'], function(){

    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login.post');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
    
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/',       [CategoryController::class, 'index'])->name('admin.dashboard');
        /* categories */
        Route::group( ['prefix'=>'categories'], function(){
            Route::get('/',       [CategoryController::class, 'index'])->name('admin.categories.index');
            Route::get('/create', [CategoryController::class, 'create'])->name('admin.categories.create');
            Route::post('/store', [CategoryController::class, 'store'])->name('admin.categories.store');
            Route::get('{id}/view',[CategoryController::class, 'view'])->name('admin.categories.view');
            Route::get('{id}/edit',   [CategoryController::class, 'edit'])->name('admin.categories.edit');
            Route::post('/update',[CategoryController::class, 'update'])->name('admin.categories.update');
            Route::get('{id}/delete', [CategoryController::class, 'delete'])->name('admin.categories.delete');
            Route::get('/trash', [CategoryController::class, 'trash'])->name('admin.categories.trash');
            Route::get('{id}/restore', [CategoryController::class, 'restore'])->name('admin.categories.restore');
        });
        /* categories */

        /*participants*/
        Route::group( ['prefix'=>'participants'], function(){
            Route::get('/', [ParticipantController::class,'index'])->name('admin.participants.index');
        });
        /*participants*/

        /*portfolio*/
        Route::group( ['prefix'=>'portfolio'], function(){
            Route::get('{id}/download', [PortfolioController::class,'download'])->name('admin.portfolio.download');
        });
        /*portfolio*/

    });
});


