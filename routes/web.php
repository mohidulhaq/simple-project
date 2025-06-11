<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class,'index'])->name('front.home');
Route::get('/about', [FrontendController::class,'about'])->name('front.about');
Route::get('/contact', [FrontendController::class,'contact'])->name('front.contact');

Route::get('task/create', [TaskController::class,'create'])->name('task.create');
Route::post('task', [TaskController::class,'store'])->name('task.store');
Route::get('task', [TaskController::class,'index'])->name('task.index');
