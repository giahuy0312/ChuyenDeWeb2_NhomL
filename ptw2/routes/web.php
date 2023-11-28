<?php

use App\Http\Controllers\UserController;
use App\Models\Users;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
//listUser
Route::get('/listUser', [UserController::class, 'listUser'])->name('listUser');
Route::get('/deleteUserAD/{id}', [UserController::class, 'deleteUserAD'])->name('deleteUserAD');
//search User
Route::get('/listSearchUser', [UserController::class, 'searchUser'])->name('listSearchUser');
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
//route User
Route::resource('user', UserController::class);
Route::get('user/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
//Hien thi san pham trang index
Route::get('/index',[ProductController::class, 'getAllProducts'])->name('index');
Route::get('/',[ProductController::class, 'getAllProducts'])->name('index');
