<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{
    public function index(){
        $products = Product::with('image')->orderBy('id', 'DESC')->get();
        return view('admin.product.all')->with([
            'products' => $products
        ]);
    }
    public function add(){
        $categories = Category::where('parent', '!=' , 0)->get();
        return view('admin.product.index')->with([
            'categories' => $categories
        ]);
    }
    public function store(Request $request) {
        $request->validate([
            'name'           => 'required',
            'category'       => 'required',
            'images'         => 'required',
        ], [], [
            'name'           => 'اسم المنتج',
            'category'       => 'القسم',
            'images'         => 'الصور',
        ]);
        $product = new Product();
        $product->category_id   = $request->category;
        $product->title         = $request->name;
        $product->description   = $request->description;
        $product->price         = $request->price;
        $product->status        = $request->status;
        $product->allow_coment  = $request->allow_comment;
        $product->color         = $request->color;
        $product->code          = '#'.$this->generateCodeNumber();
        $product->user_id       = Auth::user()->id;
        $product->save();

        $mainpath = date("Y-m-d").'/';
        $files = $request->file('images');
        if (isset($files)){
            foreach($files as $file){
                $fileNameWithExtension = $file->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $imageName = $fileName.'_'.time().'.'.$extension;
                $path = $file->move(public_path('storage/products/'.$mainpath), $imageName);
                $entry = new Image();
                $entry->url = url('').'/storage/products/'.$mainpath.$imageName;
                $entry->product_id = $product->id;
                $entry->save();
            }
        }
        return redirect(aurl('products'))->with('success','تم اضافة المنتج بنجاح');
    }
    function generateCodeNumber()
    {
        $number = mt_rand(10000000, 99999999);
        if ($this->barcodeNumberExists($number)) {
            return generateBarcodeNumber();
        }
        return $number;
    }

    function barcodeNumberExists($number)
    {
        return Product::where('code',$number)->exists();
    }
    public function delete(Request $request){
        $product = Product::where('id',$request->product_id)->first();
        if($product){
            Product::where('id',$request->product_id)->delete();
            return back()->with('success','تم حذف المنتج');
        } else {
            return back()->with('faild','المنتج غير موجود');
        }
    }
    public function edit($id){
        $product = Product::where('id',$id)->first();
        if($product){
            $categories = Category::where('parent', '!=' , 0)->get();
            $images = Image::where('product_id', $product->id)->orderBy('id', 'DESC')->get();
            return view('admin.product.edit')->with([
                'product' => $product,
                'categories' => $categories,
                'images'=>$images
            ]);
        } else {
            return back()->with('faild','المنتج غير موجود');
        }
    }
    public function update(Request $request){
        $product = Product::where('id',$request->product_id)->first();
        if($product){
            $product->category_id   = $request->category;
            $product->title         = $request->name;
            $product->description   = $request->description;
            $product->price         = $request->price;
            $product->status        = $request->status;
            $product->allow_coment  = $request->allow_comment;
            $product->color         = $request->color;
            $product->save();

            $mainpath = date("Y-m-d").'/';
            $files = $request->file('images');
            if (isset($files)){
                foreach($files as $file){
                    $fileNameWithExtension = $file->getClientOriginalName();
                    $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $imageName = $fileName.'_'.time().'.'.$extension;
                    $path = $file->move(public_path('storage/products/'.$mainpath), $imageName);
                    $entry = new Image();
                    $entry->url = url('').'/storage/products/'.$mainpath.$imageName;
                    $entry->product_id = $product->id;
                    $entry->save();
                }
            }
            return back()->with('success','تم تعديل المنتج بنجاح');
        } else {
            return back()->with('faild','المنتج غير موجود');
        }
    }
    public function deleteImage(Request $request){
        $image = Image::where('product_id',$request->product)->get();
        if($image->count() > 1){
            $image = Image::where('id',$request->product_id)->first();
            if($image){
                Image::where('id',$request->product_id)->delete();
                return back()->with('success','تم حذف الصورة');
            } else {
                return back()->with('faild','الصورة غير موجودة');
            }
        } else {
            return back()->with('faild','لا يمكنك حذف الصورة');
        }
    }
    public function show($id){
        $product = Product::where('id',$id)->first();
        if($product){
            $images = Image::where('product_id', $product->id)->orderBy('id', 'DESC')->get();
            $comments = Comment::where('product_id', $product->id)->orderBy('id', 'DESC')->get();
            return view('admin.product.show')->with([
                'product' => $product,
                'images'=>$images,
                'comments'=>$comments,
            ]);
        } else {
            return back()->with('faild','المنتج غير موجود');
        }
    }
    public function deleteComment(Request $request){
        $comment = Comment::where('id',$request->product_id)->first();
        if($comment){
            Comment::where('id',$request->product_id)->delete();
            return back()->with('success','تم حذف التعليق');
        } else {
            return back()->with('faild','التعليق غير موجودة');
        }
    }
}
