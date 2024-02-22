<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'home']);

Route::prefix('products')->group(function () {
    Route::get('/category/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/category/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/category/home-care', [ProductController::class, 'homeCare']);
    Route::get('/category/baby-kid', [ProductController::class, 'babyKid']);
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'user']);

Route::get('/sales', [SalesController::class, 'sales']);