<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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
// Route::get('/order/delete/{$order}/{$product}', [OrderController::class, "test"])->name('remove-order');
// Route::get('/order/delete/{$order}/product/{$product}', [OrderController::class, "delete"]);
Route::get('/order/{order}/product/{product}', [OrderController::class, 'destroy']);
// Route::get('/order/update/{$order}','OrderController@update');
// Route::post('/order/update/{$order}','OrderController@update');
// Route::post('SaveAll','OrderController@SaveAll');
