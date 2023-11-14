<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PromotionController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
// Login - Register
Route::get('/login-register', function () {
    return view('login-register');
});

// Order
Route::resource('order', OrderController::class);
Route::get('/order/{order}/product/{product}/{csrf?}', [OrderController::class, 'destroy']);

// Promotion
Route::get('promotion', [PromotionController::class, 'search'])->name('promotion.search');