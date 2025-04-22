<?php

use App\Http\Controllers\GoogleCalendarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generate-event', [GoogleCalendarController::class, 'generateEvent'])->name('generate-event');
