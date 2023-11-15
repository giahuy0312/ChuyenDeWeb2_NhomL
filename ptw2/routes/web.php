<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\GoogleController;
 use App\Http\Controllers\FacebookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\LangController;

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
    return view('admin.main');
});
Route::get('/logadmin', function () {
    return view('admin.adminlogin');
});
Route::get('/addproduct', function () {
    return view('admin.content.addproduct');
});
// Product
Route::get('listproduct', [ProductController::class, 'listProduct'])->name('listproduct');
Route::get('addproduct', [ProductController::class, 'registrationProduct'])->name('addproduct');
Route::post('customproduct', [ProductController::class, 'customProduct'])->name('registerproduct.custom');
Route::get('getdataedt/id{id}', [ProductController::class, 'getDataEdit'])->name('getdataedt');
Route::post('editproduct', [ProductController::class, 'updateProduct'])->name('editproduct');
Route::get('deleteproduct/id{id}', [ProductController::class, 'deleteProduct'])->name('deleteproduct');
Route::get('searchproduct', [ProductController::class, 'searchProduct'])->name('searchproduct');
Route::get('searchproductuser', [ProductController::class, 'searchProductUser'])->name('searchproductuser');;

//--------------



Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/test', function () {
    return view('test');
});


                  


// Category
Route::get('listcategory', [CategoryController::class, 'listCategory'])->name('listcategory');
Route::get('addcategory', [CategoryController::class, 'addCategory'])->name('addcategory');
Route::post('customcategory', [CategoryController::class, 'customCategory'])->name('customcategory.custom');
Route::get('getdataedtcategory/id{id}', [CategoryController::class, 'getDataEditCategory'])->name('getdataedtcategory');
Route::post('editcategory', [CategoryController::class, 'updateCategory'])->name('editcategory');
Route::get('deletecategory/id{id}', [CategoryController::class, 'deleteCategory'])->name('deletecategory');
Route::get('searchcategory', [CategoryController::class, 'searchCategory'])->name('searchcategory');
//---------

// Login, logout, registration
Route::get('login', [CustomAuthController::class, 'showFormLogin'])->name('login');
Route::post('submit-login', [CustomAuthController::class, 'submitLogin'])->name('submit-login');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('registration', [CustomAuthController::class, 'showFormRegistration'])->name('registration');
Route::post('submit-registration', [CustomAuthController::class, 'submitRegistration'])->name('submit-registration');
//-----------

// detail
//Route::get('/detail', [ProductDetailController::class, 'getProductById'])->name('detail');
Route::get('/detail/{id}', [ProductDetailController::class, 'getRelatedProducts'])->name('detail');
//---------

