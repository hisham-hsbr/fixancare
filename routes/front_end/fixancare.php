<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/tr', function () {
    return view('front_end.tr');
});

Route::get('/track', 'FrontendDashboardController@track')->name('track');
