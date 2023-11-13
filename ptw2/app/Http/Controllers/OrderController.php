<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('order', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
            if ($quality == 0) {
                return redirect()->back()->with('error','Số lượng sản phẩm ko được bằng 0');
            }
            $subtotal = $product_price * $quality;
            $order->Products()->where('product_id', $product->id)->update(
                ['quality' => $quality, 'sub_total' => $subtotal]
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
