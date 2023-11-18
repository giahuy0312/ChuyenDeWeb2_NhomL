<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ShopController extends Controller
{
    // public function index()
    // {
    //     //
    //     $products = Product::all();
    //     return view('shop');
    // }
    //
    public function getAllShopProducts()
    {
        $products = DB::table('products')->paginate(4);
        return view('shop', ['products' => $products]);
}
}