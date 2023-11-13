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
        echo 'test';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'price' => 'required',
        //     'description' => 'required',
        //     'photo' => 'required',
        //     'quantity' => 'required'
        // ]);
        // $file = $request->file('photo');
        // if($request->hasFile('photo'))
        // {
        //     $path = 'image-product';
        //     $fileName = $file->getClientOriginalName();
        //     $file->move($path,$fileName);
        //     $product->photo = $fileName;
        // }
        // $product->name = $request->name;
        // $product->price = $request->price;
        // $product->description = $request->description;
        // $product->quantity = $request->quantity;
        // $product->save();
        // $product->categories()->sync($request->input('categories'));
        // return redirect()->route('order')->with('success','Sửa thành công');
        dd($request->data);
        return redirect()->route('order');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($order, $product)
    {
        $order_id = Order::find($order);
        $order_id->Products()->where('product_id', $product)->delete();
        return redirect()->back();
    }
}
