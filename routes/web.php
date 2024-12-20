<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
Route::get('/detail', [HomeController::class, 'detail'])->name('frontend.detail');
