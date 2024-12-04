<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\WeatherController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/weather', [WeatherController::class, 'getWeather']);