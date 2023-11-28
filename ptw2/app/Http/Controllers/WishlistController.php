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
        // dd($wishlist);
        return view('wishlist', ['wishlist' => $wishlist]);
    }
}
