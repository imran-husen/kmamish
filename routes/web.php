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
Route::get('/Join-us', [MainController::class, 'join']);



// Here i am create routes of the admin panels
Route::get('/Admin-Login', [AdminController::class, 'login']);

// Show the login form (GET request)
Route::get('/Dashbord-Admin-Panels', [AdminController::class, 'dashboard'])->name('Dashboard_Admin');

// Handle login submission (POST request)
Route::post('/Dashbord-Admin-Panels', [AdminController::class, 'dashboard']);

// stored the data from home panels
Route::post('/join', [AdminController::class, 'store'])->name('join.store');

// Stored the data from the home panels
Route::post('/feedback', [AdminController::class, 'store_feedback'])->name('feedback.store');

// Stored the data of the user message
Route::post('/contact', [AdminController::class, 'store_notification'])->name('contact.store');




