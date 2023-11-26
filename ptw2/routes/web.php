<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use Laravel\Socialite\Facades\Socialite;

=======
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForgetpasswordManager;
>>>>>>> thang/login-reigister
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
Route::get('/admin', function () {
    return view('admin.content.thongKe');
});

<<<<<<< HEAD
// Product
Route::get('listproduct', [ProductController::class, 'listProduct'])->name('listproduct');
Route::get('addproduct', [ProductController::class, 'registrationProduct'])->name('addproduct');
Route::post('customproduct', [ProductController::class, 'customProduct'])->name('registerproduct.custom');
Route::get('getdataedt/id{id}', [ProductController::class, 'getDataEdit'])->name('getdataedt');
Route::post('editproduct', [ProductController::class, 'updateProduct'])->name('editproduct');
Route::get('deleteproduct/id{id}', [ProductController::class, 'deleteProduct'])->name('deleteproduct');
Route::get('getProducts', [ProductController::class, 'index'])->name('getProducts');
// Category
Route::get('listcategory', [CategoryController::class, 'listCategory'])->name('listcategory');
Route::get('addcategory', [CategoryController::class, 'addCategory'])->name('addcategory');
Route::post('customcategory', [CategoryController::class, 'customCategory'])->name('customcategory.custom');
Route::get('getdataedtcategory/id{id}', [CategoryController::class, 'getDataEditCategory'])->name('getdataedtcategory');
Route::post('editcategory', [CategoryController::class, 'updateCategory'])->name('editcategory');
Route::get('deletecategory/id{id}', [CategoryController::class, 'deleteCategory'])->name('deletecategory');

//---------

// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/login-register', function () {
    return view('login-register');
});
//Hien thi san pham trang index
Route::get('/index',[ProductController::class, 'getAllProducts'])->name('index');
Route::get('/',[ProductController::class, 'getAllProducts'])->name('index');
=======
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
//forget password
route::get('/forgetpassword', [ForgetpasswordManager::class, 'forgetpassword'])
    ->name('forget.password');
route::post('/forgetpassword', [ForgetpasswordManager::class, 'forgetpasswordpost'])
    ->name('forget.password.post');
//reset password
Route::get('/resetpasssword/{token}', [ForgetpasswordManager::class, 'resetPasssword'])
    ->name('reset.passsword');
// Route::get('/resetpassword', [ForgetpasswordManager::class, 'resetPassswordPost'])->name('reset.passsword.post');
Route::post('/resetpassword', [ForgetpasswordManager::class, 'resetPassswordPost'])
    ->name('reset.passsword.post');
>>>>>>> thang/login-reigister
