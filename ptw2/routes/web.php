<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Login, logout, registration
Route::get('/admin', [AdminController::class, 'showFormLog'])->name('showFormLog');
// Route::get('/admin', [AdminController::class, 'login'])->name('login');
Route::post('/admin', [AdminController::class, 'postLogin'])->name('postLogin');
Route::get('/regis', [AdminController::class, 'regis'])->name('regis');
Route::post('/regis', [AdminController::class, 'postRegis'])->name('postRegis');


//signout
Route::get('signOut', [AdminController::class, 'signOut'])->name('signout');
Route::middleware('admin')->group(function () {
//dasboard
Route::get('showDasboard', [AdminController::class, 'showDasboard'])->name('showDasboard');
//product
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
});



//Route::post('login', [AdminController::class, 'login'])->name('login-admin');
// Product



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
