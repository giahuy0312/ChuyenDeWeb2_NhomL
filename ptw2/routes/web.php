<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForgetpasswordManager;
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
// Route::get('/', function () {
//     return view('index');
// });
Route::get('/admin', function () {
    return view('admin.main');
});
Route::get('/home', function () {
    return view('index');
});

// Product
Route::get('listproduct', [ProductController::class, 'listProduct'])->name('listproduct');
Route::get('addproduct', [ProductController::class, 'registrationProduct'])->name('addproduct');
Route::post('customproduct', [ProductController::class, 'customProduct'])->name('registerproduct.custom');
Route::get('getdataedt/id{id}', [ProductController::class, 'getDataEdit'])->name('getdataedt');
Route::post('editproduct', [ProductController::class, 'updateProduct'])->name('editproduct');
Route::get('deleteproduct/id{id}', [ProductController::class, 'deleteProduct'])->name('deleteproduct');
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
Route::get('/index', [ProductController::class, 'getAllProducts'])->name('index');
Route::get('/home', [ProductController::class, 'getAllProducts'])->name('index');
Route::get('/', [ProductController::class, 'getAllProducts'])->name('index');

// Order
Route::resource('order', OrderController::class);
Route::get('/order/{order}/product/{product}/{csrf?}', [OrderController::class, 'destroy']);

// Promotion
Route::get('promotion', [PromotionController::class, 'search'])->name('promotion.search');
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
