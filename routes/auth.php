<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route; 
use App\Http\Middleware\RedirectIfAuthenticated;

Route::redirect('/', '/admin/login')->middleware([RedirectIfAuthenticated::class]);
Route::prefix('admin')->name('admin.')->group(function () {  
    
    Route::redirect('/', 'login')->middleware([RedirectIfAuthenticated::class]);
    Route::match(['get', 'post'], 'login', [AuthController::class, 'index'])->name('login')->middleware([RedirectIfAuthenticated::class]);
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); 
    
});