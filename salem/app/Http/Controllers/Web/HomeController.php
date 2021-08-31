<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        $products  = Product::where('status','On')->orderby('id','DESC')->take(6)->get();
        $offers    = Product::whereHas('offer')->where('status','On')->orderby('id','DESC')->take(6)->get();
        return view('web.home.index')->with([
            'products'=>$products,
            'offers'=>$offers,
            'title'=>'home'
        ]);
    }
    public function offer()
    {
        $categories = Category::where('parent',0)->get();
        $products   = Product::whereHas('offer')->where('status','On')->orderBy('id', 'DESC')->paginate('12');
        return view('web.home.offer')->with([
            'categories'=>$categories,
            'products'=>$products,
            'title'=>'offers'
        ]);
    }
    public function products()
    {
        $categories = Category::where('parent',0)->get();
        $products   = Product::where('status','On')->orderBy('id', 'DESC')->paginate('12');
        return view('web.home.products')->with([
            'categories'=>$categories,
            'products'=>$products,
            'title'=>'products'
        ]);
    }
    public function contact(Request $request) {
        $request->validate([
            'username'        => 'required',
        ], [], [
            'username'       => 'اسم المرسل',
        ]);
        $product = new Message();
        $product->name    = $request->username;
        $product->email   = $request->email;
        $product->phone   = $request->phone;
        $product->message = $request->msg;
        $product->save();
        return back()->with('success','تم اضافة الرسالة بنجاح');
    }
    public function showProduct($id){
        $product   = Product::where('status','On')->where('id',$id)->first();
        $comments  = Comment::where('product_id',$id)->orderBy('id', 'DESC')->paginate('3');
        $images    = Image::where('product_id',$id)->get();
        $products  = Product::where('status','On')->orderby('id','DESC')->take(6)->get();
        return view('web.home.productDetail')->with([
            'product'=>$product,
            'comments'=>$comments,
            'images'=>$images,
            'products'=>$products,
            'title'=>'products'
        ]);
    }
    public function comment(Request $request) {
        $request->validate([
            'username'        => 'required',
            'review'          => 'required',
        ], [], [
            'username'       => 'اسم المرسل',
            'review'         => 'الرسالة',
        ]);
        $product = new Comment();
        $product->name          = $request->username;
        $product->emai          = $request->email;
        $product->comment       = $request->review;
        $product->product_id    = $request->product_id;
        $product->save();
        return back()->with('success','تم اضافة التعليق بنجاح');
    }
    public function about()
    {
        return view('web.home.about')->with(['title'=>'about']);
    }
    public function showProducts($id)
    {
        $categories = Category::where('id',$id)->get();
        $products   = Product::where('status','On')->whereHas('category',function ($query) use ($id){
            $query->where('parent',$id);
        })->orderBy('id', 'DESC')->paginate('12');
        return view('web.home.products')->with([
            'categories'=>$categories,
            'products'=>$products,
            'title'=>'products'
        ]);
    }
    public function CategoryProducts($id)
    {
        $categories = Category::where('id',$id)->get();
        $products   = Product::where('status','On')->whereHas('category',function ($query) use ($id){
            $query->where('parent',$id);
        })->orderBy('id', 'DESC')->paginate('12');
        return view('web.home.products')->with([
            'categories'=>$categories,
            'products'=>$products,
            'title'=>'products'
        ]);
    }
    public function admin(){
        if(!Auth::guest()){
            return redirect(aurl('dashboard'));
        } else {
            return view('admin.auth.login') ;
        }
    }
}
