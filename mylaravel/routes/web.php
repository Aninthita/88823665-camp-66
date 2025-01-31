<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "<h1>Hi kitten </h1>";
});

Route::get('/Mycontroller/{id?}', [MyController::class, 'myfunction']);
Route::post('/Mycontroller', [MyController::class, 'myfunction']);