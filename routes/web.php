<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SMSSendController;
use App\Http\Controllers\weatherController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/weather', [WeatherController::class, 'WeatherPage']);

Route::get('/SMSSendPage', [SMSSendController::class, 'SMSSendPage'])->name('SMSSendPage');;
Route::post('/SMSSend', [SMSSendController::class, 'SMSSend'])->name('SMSSend');
