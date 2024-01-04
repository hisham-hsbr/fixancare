<?php

use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {

    //mobile services
    Route::controller('Fixancare\MobileServiceController')->prefix('/admin/fixancare/mobile-services')->name('mobile-services.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::patch('/update/{id}', 'update')->name('update');
        Route::post('/store', 'store')->name('store');
        Route::delete('/destroy{id}', 'destroy')->name('destroy');
        Route::get('/get', 'mobileServicesGet')->name('get');
        Route::get('/import', 'mobileServicesImport')->name('import');
        Route::post('/upload', 'mobileServicesUpload')->name('upload');
        Route::get('/download', 'mobileServicesDownload')->name('download');
    });


});
