<?php

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


Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});
route::group(['middleware' => 'guest'], function () {
    //lấy dũ liệu từ login
    route::get('/login', [UserController::class, 'login'])->name('login');
    route::post('/login', [UserController::class, 'loginpost'])->name('loginpost');
    //lấy dữ liệu từ register
    route::get('/register', [UserController::class, 'register'])->name('register');
    route::post('/register', [UserController::class, 'registerpost'])->name('registerpost');
});

Route::group(['middleware' => 'auth'], function () {
    route::get('/home', [HomeController::class, 'index'])->name('home');
});
route::get('/logout', [UserController::class, 'logout'])->name('logout');
