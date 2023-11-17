<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        // $products = Product::all();
        // foreach ($orders as $order) {
        //     if ($order->order_status == 0) {
        //         return view('order', ['orders' => $orders, 'products' => $products]);
        //         echo $order;
        //     }
        // }
        return view('order', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // echo $request->product;
        // $orders = Order::all();
        $product = Product::find($request->product);
        // $order_id = 0;          
        // foreach ($orders as $order) {
        //     if ($order->user_id == 2) {
        //         if ($order->order_status != 0) {
        //             $order_id = $order->id;
        //         }
        //     }
        // }
        $order = new Order();
        $order->user_id = 2;
        $order->order_status = 0;
        $order->order_total = $product->price;
        // echo $order->id;
        // echo $order->user_id;
        $order->products()->attach('quality' , $request->product);
        $order->save();
        // Order::create([
        //     'user_id' => 2,
        //     'order_status' => 0,
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
        // DB::table('order_product')->create(
        //     ['quality' => 1, 'product_id' => $request->product, 'created_at' => now(), 'updated_at' => now()]
        // );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order = Order::find($order->id);
        $products = $order->Products()->get();
        $total = 0;
        $subtotal = 0;
        foreach ($products as $product) {
            $product_id = "id_".$product->id;
            $product_price = $product->price;
            $quality = $request->$product_id;
            // $total += $product_price * $quality;
            if (is_numeric($quality) == 0 || $quality <= 0) {
                return redirect()->back()->with('error','Số lượng sản phẩm ko được bằng 0');
            }
            $subtotal = $product_price * $quality;
            DB::table('order_product')->where([['product_id', $product->id],['order_id', $order->id]])->update(
                ['quality' => $quality, 'sub_total' => $subtotal, 'updated_at' => now()]
            );

        }
        // echo $subtotal;
        return redirect()->back()->with('success','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($order, $product, $csrf)
    {
        if ($csrf = csrf_token()) {
            $order_id = Order::find($order);
            $order_id->Products()->where('product_id', $product)->delete();
        }
        return redirect()->back();
    }
}
