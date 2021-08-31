<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id', 'DESC')->get();
        $maincategories = Category::where('parent',0)->get();
        return view('admin.categories.index')->with([
            'categories'=>$categories,
            'maincategories'=>$maincategories
        ]);
    }
    public function delete(Request $request){
        $product = Category::where('id',$request->product_id)->first();
        if($product){
            Category::where('id',$request->product_id)->delete();
            return back()->with('success','تم حذف القسم');
        } else {
            return back()->with('faild','القسم غير موجود');
        }
    }
    public function store(Request $request) {
        $request->validate([
            'name'        => 'required',
            'parent'      => 'required',
        ], [], [
            'name'        => 'اسم القسم',
            'parent'      => 'نوع القسم',
        ]);
        $product = new Category();
        $product->title    = $request->name;
        $product->parent   = $request->parent;
        $product->save();
        return redirect(aurl('categories'))->with('success','تم اضافة القسم بنجاح');
    }
}
