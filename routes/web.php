<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class,'index'])->name('front.home');
Route::get('/contact', [FrontendController::class,'contact'])->name('front.contact');
