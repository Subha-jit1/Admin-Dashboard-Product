<?php 

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {  
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
});

require __DIR__.'/auth.php';
