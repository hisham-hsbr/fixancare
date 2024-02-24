<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/job', function () {
    return view('front_end.tr');
});

Route::get('/track-job-number', 'FrontendDashboardController@trackSearchJob')->name('track-job-number');
Route::get('/track-phone-number', 'FrontendDashboardController@trackSearchPhone')->name('track-phone-number');
