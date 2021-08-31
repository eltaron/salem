<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class messagesController extends Controller
{
    public function index(){
        $messages = Message::orderBy('id', 'DESC')->get();
        return view('admin.messages.index')->with([
            'messages'=>$messages
        ]);
    }
    public function delete(Request $request){
        $product = Message::where('id',$request->product_id)->first();
        if($product){
            Message::where('id',$request->product_id)->delete();
            return back()->with('success','تم حذف الرسالة');
        } else {
            return back()->with('faild','الرسالة غير موجوده');
        }
    }
}
