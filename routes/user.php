<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

Route::middleware('auth')->name('user.')->group(function(){

    Route::get('/my-account', [UserController::class, 'myAccount'])->name('dashboard');
});
