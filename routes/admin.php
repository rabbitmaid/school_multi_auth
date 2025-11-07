<?php

use App\Http\Controllers\Dashboard\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', HomeController::class)->middleware(['auth', 'verified'])->name('admin.dashboard');