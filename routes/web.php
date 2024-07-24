<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('admin')->group(function () { 
    Route::get('dashboard', function () {
        return Inertia::render('Admin/Home/Dashboard');
    })->name('dashboard');

    Route::get('login', function () {
        return Inertia::render('Auth/Login');
    })->name('login');
    
});
