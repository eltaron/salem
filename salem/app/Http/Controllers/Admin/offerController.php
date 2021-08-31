<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Product;
use Illuminate\Http\Request;

class offerController extends Controller
{
    public function index() {
        $offers = Offer::orderBy('id', 'DESC')->get();
        return view('admin.offer.index')->with([
            'offers'=>$offers
        ]);
    }
    public function delete(Request $request){
        $product = Offer::where('id',$request->product_id)->first();
        if($product){
            Offer::where('id',$request->product_id)->delete();
            return back()->with('success','تم حذف العرض');
        } else {
            return back()->with('faild','العرض غير موجود');
        }
    }
    public function add(){
        $products = Product::where('status', '=' , 1)->get();
        return view('admin.offer.add')->with([
            'products' => $products
        ]);
    }
    public function store(Request $request) {
        $request->validate([
            'product'        => 'required',
            'price'          => 'required',
            'end_at'         => 'required',
        ], [], [
            'product'       => 'اسم المنتج',
            'price'         => 'السعر الجديد',
            'end_at'        => 'وقت الانتهاء',
        ]);
        $offer = Offer::where('product_id', $request->product)->first();
        if($offer){
            return back()->with('faild','يوجد عرض لذلك المنتج بالفعل');
        } else{
            $product = new Offer();
            $product->product_id    = $request->product;
            $product->price         = $request->price;
            $product->end_at        = $request->end_at;
            $product->save();
            return redirect(aurl('offers'))->with('success','تم اضافة العرض بنجاح');
        }
    }
    public function edit($id){
        $offer = Offer::where('id',$id)->first();
        $products = Product::where('status', '=' , 1)->get();
        if($offer){
            return view('admin.offer.edit')->with([
                'offer' => $offer,
                'products'=>$products
            ]);
        } else {
            return back()->with('faild','العرض غير موجود');
        }
    }
    public function update(Request $request){
        $offer = Offer::where('id',$request->offer_id)->first();
        if($offer){
            $offer->product_id    = $request->product;
            $offer->price         = $request->price;
            $offer->end_at        = $request->end_at;
            $offer->save();
            return back()->with('success','تم تعديل العرض بنجاح');
        } else {
            return back()->with('faild','العرض غير موجود');
        }
    }
}
