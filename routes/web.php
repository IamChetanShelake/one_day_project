<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

// Home routes
Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/home2', [WebsiteController::class, 'home2'])->name('home2');
Route::get('/home3', [WebsiteController::class, 'home3'])->name('home3');

// About route
Route::get('/about', [WebsiteController::class, 'about'])->name('about');

// Causes routes
Route::get('/causes', [WebsiteController::class, 'causes'])->name('causes');
Route::get('/causes/details', [WebsiteController::class, 'causesDetails'])->name('causes.details');

// Events routes
Route::get('/events', [WebsiteController::class, 'events'])->name('events');
Route::get('/events/carousel', [WebsiteController::class, 'eventsCarousel'])->name('events.carousel');
Route::get('/events/details', [WebsiteController::class, 'eventsDetails'])->name('events.details');

// Team routes
Route::get('/team', [WebsiteController::class, 'team'])->name('team');
Route::get('/team/become-volunteer', [WebsiteController::class, 'team2'])->name('team2');
Route::get('/team/volunteer-details', [WebsiteController::class, 'team3'])->name('team3');

// Blog routes
Route::get('/blog/grid', [WebsiteController::class, 'blogGrid'])->name('blog.grid');
Route::get('/blog/carousel', [WebsiteController::class, 'blogCarousel'])->name('blog.carousel');
Route::get('/blog/details', [WebsiteController::class, 'blogDetails'])->name('blog.details');

// Other routes
Route::get('/testimonials', [WebsiteController::class, 'testimonials'])->name('testimonials');
Route::get('/faq', [WebsiteController::class, 'faq'])->name('faq');
Route::get('/error', [WebsiteController::class, 'error'])->name('error');
Route::get('/gallery', [WebsiteController::class, 'gallery'])->name('gallery');
Route::get('/donate', [WebsiteController::class, 'donate'])->name('donate');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
