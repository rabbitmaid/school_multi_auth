<?php

use App\Http\Controllers\Dashboard\Lecturer\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix("lecturer")->middleware(['auth', 'verified', 'role:lecturer'])->group(function () {
    Route::get('/dashboard', HomeController::class)->name('lecturer.dashboard');
});