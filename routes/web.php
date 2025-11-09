<?php
use App\Http\Controllers\SampleDataController;


// Route::get('/about', [SampleDataController::class, 'about'])->name('about');
Route::get('/about', 'about')->name('about');

Route::get('/', function () {
    return view('welcome');
});

