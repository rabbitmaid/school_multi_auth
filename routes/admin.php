<?php

use App\Http\Controllers\Dashboard\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix("admin")->middleware(['auth', 'verified','role:admin'])->group(function () {
    Route::get('/dashboard', HomeController::class)->name('admin.dashboard');
});