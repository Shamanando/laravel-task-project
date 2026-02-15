<?php

use App\Http\Controllers\AboutContoller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Error404Controller;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [AboutContoller::class, 'index'])->name('about');

Route::get('/service', [ServiceController::class, 'index'])->name('service');

Route::get('/feature', [FeatureController::class, 'index'])->name('feature');

Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');

Route::get('/404', [Error404Controller::class, 'index'])->name('404');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
