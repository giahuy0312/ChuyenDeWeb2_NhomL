<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
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

session_start();
if (isset($_SESSION['user_id'])) {
    Route::get('/home', function () {
        return view('index');
    });
}
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
//route User
Route::resource('user', UserController::class);
Route::get('user/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
route::get('/logout', [UserController::class, 'logout'])->name('logout');
