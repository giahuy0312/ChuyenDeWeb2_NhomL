<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('index');
});
// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/login-register', function () {
    return view('login-register');
});
//Hien thi san pham trang index
Route::get('/index',[ProductController::class, 'getAllProducts'])->name('index');
Route::get('/',[ProductController::class, 'getAllProducts'])->name('index');