<?php

use Illuminate\Support\Facades\Route;

// "auth" orqali login bo‘lganlikni, "role:admin" orqali adminlikni tekshiradi
// Route::middleware(['auth', 'role:admin'])
//     ->prefix('admin') 
//     ->group(function () {


    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');

    // Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])
    //     ->name('users.index');

    // Route::resource('/posts', App\Http\Controllers\Admin\PostController::class);
// });
