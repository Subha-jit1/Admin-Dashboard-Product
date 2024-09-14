<?php

    use App\Http\Controllers\Admin\ChatController;
    use App\Http\Controllers\Admin\HomeController;
    use App\Http\Middleware\AuthenticateRequests;
    use App\Http\Middleware\PreventBackButtonMiddleware;
    use Illuminate\Support\Facades\Route;

    Route::prefix('admin')->name('admin.')->middleware([AuthenticateRequests::class])->group(function () {  
        Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware(PreventBackButtonMiddleware::class)->can('dashboard.view'); 
        
        
        // local api
        Route::get('get-all-conversations', [ChatController::class, 'getAllConversations'])->name('get-all-conversations'); 
        
    });

    require __DIR__.'/auth.php';
 