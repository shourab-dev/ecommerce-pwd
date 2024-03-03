<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//* HOME PAGE ROUTE
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/test/product', [ProductController::class, 'showProduct'])->name('test.product.show');
Route::get('/test/product/sku', [ProductController::class, 'getSkus'])->name('test.product.sku');
Auth::routes();
