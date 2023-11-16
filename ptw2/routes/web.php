<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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

// Home
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });

// Login - register
Route::group(['middleware' => 'guest'], function () {
    //lấy dũ liệu từ login
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'loginpost'])->name('loginpost');
    //lấy dữ liệu từ register
    Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/register', [UserController::class, 'registerpost'])->name('registerpost');
});

// Logout
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//Hien thi san pham trang index
Route::get('/index',[ProductController::class, 'getAllProducts'])->name('index');
Route::get('/',[ProductController::class, 'getAllProducts'])->name('index');
