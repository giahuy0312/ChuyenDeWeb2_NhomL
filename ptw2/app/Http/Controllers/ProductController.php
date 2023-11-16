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
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'size' => 'required',
            'material' => 'required|in:14k,18k,Platinum',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'category_id' => 'required',
        ]);
        $file = $request->file('image');
        $path = 'uploads';
        $fileName = $file->getClientOriginalName();
        $file->move($path, $fileName);
        $product = new Product($request->all());
        $product->image = $fileName;
        $product->save();
        return redirect("listproduct");
    }

    public function createProduct(array $data)
    {
        return Product::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price'],
            'size' => $data['size'],
            'material' => $data['material'],
            'category_id' => $data['category_id'],
            'image' => $data['image'],
        ]);
    }

    public function getDataEdit($id)
    {
        $getData = DB::table('products')->select('*')->where('id', $id)->get();
        $categories = DB::table('categories')->select('*')->get();
        return view('admin.content.editproduct', ['getDataProductById' => $getData, 'categories' => $categories]);
    }

    public function updateProduct(Request $request)
    {
        $file = $request->file('image');
        $path = 'uploads';
        $fileName = $file->getClientOriginalName();
        $file->move($path, $fileName);
        $updateData = DB::table('products')->where('id', $request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'size' => $request->size,
            'material' => $request->material,
            'category_id' => $request->category_id,
            'image' => $fileName,
            
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
