<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

//Unknow
class ProductController extends Controller
{
    public function registrationProduct()
    {
        $categories = DB::table('categories')->select('*')->get();
        // $size = DB::table('sizes')->select('*')->get();
        return view('admin.content.addproduct', ['categories' => $categories]);
    }

    public function customProduct(Request $request)
    {
        
        $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required|numeric',
            'product_size' => 'required',
            'product_material' => 'required|in:14k,18k,Platinum',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'category_id' => 'required',
        ]);
        $file = $request->file('product_image');
        $path = 'uploads';
        $fileName = $file->getClientOriginalName();
        $file->move($path, $fileName);
        $product = new Product($request->all());
        $product->product_image = $fileName;
        $product->categories()->attach($request->input('categories'));
        $product->save();
        return redirect("listproduct");
    }

    public function createProduct(array $data)
    {
        return Product::create([
            'product_name' => $data['product_name'],
            'product_description' => $data['roduct_description'],
            'product_price' => $data['product_price'],
            'product_size' => $data['product_size'],
            'product_material' => $data['product_material'],
            'category_id' => $data['category_id'],
            'product_image' => $data['product_image'],
        ]);
    }

    public function getDataEdit($id)
    {
        $getData = DB::table('products')->select('*')->where('id', $id)->get();
        $categories = DB::table('categories')->select('*')->get();
        return view('admin.content.editproduct', ['getDataProductById' => $getData, 'categories' => $categories, 'size' => $size]);
    }

    public function updateProduct(Request $request)
    {
        $file = $request->file('product_image');
        $path = 'uploads';
        $fileName = $file->getClientOriginalName();
        $file->move($path, $fileName);

        $updateData = DB::table('products')->where('id', $request->id)->update([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_price' => $request->product_price,
            'product_size' => $request->product_size,
            'product_material' => $request->product_material,
            'category_id' => $request->category_id,
            'product_image' => $fileName,
            
        ]);
        
        //Thực hiện chuyển trang
        return redirect('listproduct');
    }
    public function deleteProduct($id)
    {
        $deleteData = DB::table('products')->where('id', '=', $id)->delete();
        return redirect('listproduct');
    }


    public function listProduct()
    {
        $categories = Category::all();
        $products = DB::table('products')->paginate(4);
        return view('admin.content.listproduct', ['products' => $products,'categories' => $categories]);
    }

}
