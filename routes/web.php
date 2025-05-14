<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('index');
});


Route::get('/test', [MainController::class, 'test']);
Route::get('/Educational-life', [MainController::class, 'education']);
Route::get('/Writter-life', [MainController::class, 'writter']);
Route::get('/Social-life', [MainController::class, 'social']);
Route::get('/Polotical-life', [MainController::class, 'polotical']);



