<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    //
    public function index()
    {
        $wishlist = Wishlist::all();
        // $products = Product::all();
        // foreach ($orders as $order) {
        //     if ($order->order_status == 0) {
        //         return view('order', ['orders' => $orders, 'products' => $products]);
        //         echo $order;
        //     }
        // }
        return view('wishlist');
    }
}
