<?php

use App\Http\Controllers\Dashboard\Lecturer\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', HomeController::class)->middleware(['auth', 'verified'])->name('lecturer.dashboard');