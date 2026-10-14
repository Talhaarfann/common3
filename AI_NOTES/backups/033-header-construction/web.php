<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index2');
})->name('index2');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contact/thank-you', [ContactController::class, 'thankYou'])->name('contact.thank-you');
Route::post('/contact', [ContactController::class, 'store'])->middleware('throttle:5,1')->name('contact.store');
Route::redirect('/contact.html', '/contact');

Route::get('/about-us', [AboutController::class, 'index'])->name('about');
Route::redirect('/about-us.html', '/about-us');
