<?php

use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->middleware(['admin'])->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'adminLogin'])->name('login')->withoutMiddleware(['admin']);
    Route::post('/login', [AdminController::class, 'adminLoginAuth'])->name('auth')->withoutMiddleware(['admin']);
    Route::post('/logout', [AdminController::class, 'adminLogout'])->name('logout')->withoutMiddleware(['admin']);


    //*  Protected Routes (Requires Authentication)
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    //* CATEGORY
    Route::prefix('category/')->name('category.')->group(function () {
        Route::get('/{id?}', [CategoryController::class, 'show'])->name('show');
        Route::post('/store/{id?}', [CategoryController::class, 'store'])->name('store');
    });
});
