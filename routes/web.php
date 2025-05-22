<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

// It is statics rotes of the main controler
Route::get('/', [MainController::class, 'home']);
Route::get('/About-Us', [MainController::class, 'about']);
Route::get('/Contact-Us', [MainController::class, 'contact']);
Route::get('/Join-us', [MainController::class, 'join']);
Route::get('/Success-upload', [AdminController::class, 'success']);
Route::get('/News-Gallery', [MainController::class, 'news'])->name('news_gallery');
Route::get('/Video-Gallery', [MainController::class, 'videos']);
Route::get('/Blogging-Page', [MainController::class, 'blog']);
Route::get('/Educational-Achievements',[MainController::class, 'educational']);
Route::get('/Writings-Achievements',[MainController::class, 'writer']);
Route::get('/Social-Working-and-Achievements',[MainController::class, 'social']);
Route::get('/Polotical-Working-and-Achievements',[MainController::class, 'polotical']);
Route::get('/Grand-Events-By-KM-Amish',[MainController::class, 'events']);
Route::get('/Latest-Movements-By-KM-Amish',[MainController::class, 'movements']);




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

//upload and stored the news
Route::post('/admin/news/store', [AdminController::class, 'store_news'])->name('admin.news.store');
Route::post('/news/store', [AdminController::class, 'store_news'])->name('news.store');

// upload and stored the youtube videos link
Route::post('/add-video', [AdminController::class, 'store_video'])->name('video.store');

// This is the routes of the bloging page
Route::post('/blogs', [AdminController::class, 'store_blog'])->name('blogs.store');

//This is saved the mail in database
Route::post('/subscribe', [AdminController::class, 'store_email'])->name('subscribe');

// Stored the education achievements
Route::post('/achievements/store', [AdminController::class, 'store_education'])->name('achievements.store');

// Stored the data of the evets
Route::post('/store-event', [AdminController::class, 'store_event'])->name('events.store');

// This is the routings of the socila achievemenst
Route::post('/socials', [AdminController::class, 'store_social'])->name('socials.store');


// Stored the data of the movements page
Route::post('/moments', [AdminController::class, 'store_movements'])->name('moments.store');

// Stored the data of the writings and publication
Route::post('/writing/store', [AdminController::class, 'store_writing'])->name('writing.store');

//Here i am writing the code of the polotical page
Route::post('/politics/store', [AdminController::class, 'store_polotics'])->name('politics.store');





//Special operation in the database
Route::delete('/delete-video/{id}', [AdminController::class, 'deleteVideo'])->name('video.delete');
Route::delete('/blogs/{id}', [AdminController::class, 'destroy'])->name('blogs.destroy');
Route::delete('/admin/news/{id}', [AdminController::class, 'destroy_news'])->name('news.destroy');
Route::delete('/achievements/{id}', [AdminController::class, 'destroy_education'])->name('achievements.destroy');
Route::delete('/delete-event/{id}', [AdminController::class, 'destroy_events'])->name('events.destroy');
Route::delete('/socials/{id}', [AdminController::class, 'destroy_social'])->name('socials.destroy');
Route::delete('/polotics/{id}', [AdminController::class, 'destroy_polotics'])->name('polotics.destroy');
Route::delete('/moments/{id}', [AdminController::class, 'destroy_movements'])->name('moments.destroy');
Route::delete('/writings/{id}', [AdminController::class, 'destroy_writings'])->name('writings.destroy');





