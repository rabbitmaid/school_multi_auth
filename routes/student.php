<?php

use App\Http\Controllers\Dashboard\Student\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', HomeController::class)->middleware(['auth', 'verified'])->name('student.dashboard');