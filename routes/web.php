<?php

use App\Http\Controllers\SampleDataController;

Route::get('/samplepage', [SampleDataController::class, 'sampledata'])->name('sampledata');



Route::get('/', function () {
    return view('welcome');
});

