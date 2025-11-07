<?php

use App\Http\Controllers\Dashboard\Student\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix("student")->middleware(['auth', 'verified', 'role:student'])->group(function () {
    Route::get('/dashboard', HomeController::class)->name('student.dashboard');
});