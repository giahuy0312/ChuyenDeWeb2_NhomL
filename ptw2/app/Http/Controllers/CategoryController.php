<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addCategory()
    {
        return view('admin.content.addcategory');
    }   
    public function customCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);
        $category = new Category($request->all());
        $category->save();
        return redirect("listcategory");
    }

    public function listCategory()
    {
        $categories = DB::table('categories')->paginate(4);
        return view('admin.content.listcategory', compact('categories'));
    }

    public function createCategory(array $data)
    {
        return Category::create([
            'category_name' => $data['category_name'],
        ]);
    }
    
    public function getDataEditCategory($id)
    {
        $getData = DB::table('categories')->select('*')->where('id', $id)->get();
        return view('admin.content.editcategory')->with('getDataCategoryById', $getData);
    }
     public function updateCategory(Request $request)
    { 
        $updateData = DB::table('categories')->where('id', $request->id)->update([
            'category_name' => $request->cate_name,
        ]);
        return redirect('listcategory');
    }


    public function deleteCategory($id)
    {
        
        $deleteData = DB::table('categories')->where('id', '=', $id)->delete();
        return redirect('listcategory');
    }


    public function searchCategory(Request $request)
    {
        $keyword = $request->keyword;
        $categories = Category::where('category_name', 'LIKE', '%' . $keyword . '%')->paginate(4);
        return view('admin.content.listsearchcategory', compact('categories'));
    }
}
