<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('index');
});


Route::get('/test', [MainController::class, 'test']);