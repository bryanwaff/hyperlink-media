<?php

use App\Http\Controllers\InquiryController;
use Illuminate\Support\Facades\Route;

// Essential Pages
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/projects', 'pages.projects')->name('projects');
Route::view('/contact', 'pages.contact')->name('contact');

// Contact Form Submission
Route::post('/contact', [InquiryController::class, 'store'])->name('contact.submit');
