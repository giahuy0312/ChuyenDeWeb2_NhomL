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
        if (!isset($_SESSION['user_id'])) {
            return redirect('/home');
        }
        $orders = Order::all();
        $product = Product::find($request->product);
        foreach ($orders as $order) {
            if ($order->user_id == $_SESSION['user_id']) {
                if ($order->order_status == 0) {
                    
                    $order->products()->attach([$request->product], ['quality' => 1, 'unit_price' => $product->price, 'sub_total' => $product->price]);
                    DB::table('order_product')->where([['product_id', $product->id],['order_id', $order->id]])->update(
                        ['quality' => +1],[ 'sub_total' => $product->price, 'updated_at' => now()]
                    );
                    return redirect()->back();
                }
            }
        }
        $order = new Order();
        $order->user_id = $_SESSION['user_id'];
        $order->order_status = 0;
        $order->order_total = $product->price;
        $order->save();
        $order->products()->attach([$request->product], ['quality' => 1, 'unit_price' => $product->price, 'sub_total' => $product->price]);
        return redirect()->back();
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
