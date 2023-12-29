<?php

use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    //Permissions
    Route::controller('Fixancare\MobileServiceController')->prefix('/admin/fixancare/mobile-services')->name('mobile-services.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::patch('/update/{id}', 'update')->name('update');
        Route::post('/store', 'store')->name('store');
        Route::delete('/destroy{id}', 'destroy')->name('destroy');
        Route::get('/get', 'permissionsGet')->name('get');
        Route::get('/import', 'permissionsImport')->name('import');
        Route::post('/upload', 'permissionsUpload')->name('upload');
        Route::get('/download', 'permissionsDownload')->name('download');
    });


});
