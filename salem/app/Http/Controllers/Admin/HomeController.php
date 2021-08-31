<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
        if(!Auth::guest()){
            return redirect(aurl('dashboard'));
        } else {
            return view('admin.auth.login') ;
        }
    }
    public function dashbord()
    {
        $products  = Product::orderby('id','DESC')->take(9)->get();
        $offers    = Offer::orderBy('id', 'DESC')->take(6)->get();
        $productsCharts = Product::whereYear('created_at','=',2021)->get()
            ->groupBy(function($date) {
                //  return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });
        $offersCharts = Offer::whereYear('created_at','=',2021)->get()
            ->groupBy(function($date) {
                //  return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });
        $taskcharts = Task::whereYear('created_at','=',2021)->get()
            ->groupBy(function($date) {
                //  return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });
        return view('admin.dashboard.index')->with([
            'products' => $products,
            'offers'=>$offers,
            'offercount'=>Offer::all(),
            'productcount'=>Product::all(),
            'taskcount'=>Task::all(),
            'messagecount'=>Message::all(),
            'productsCharts'=>$productsCharts,
            'offersCharts'=>$offersCharts,
            'taskcharts'=>$taskcharts
        ]);
    }
    public function auth(Request $request)
    {
        $data = $this->validate($request, [
            'name'          =>'required',
            'password'      =>'required',
        ]);
        $user = User::where('name',$request->name)->where('admin',1)->first();
        if(Auth::attempt($data,true) && $user){
            return redirect(aurl('dashboard'))->with('success','تم تسجيل الدخول');
        }
        return redirect(aurl(''))->with('faild','تعذر تسجيل الدخول');
    }
    public function logout()
    {
        Auth::logout();
        return redirect(aurl(''));
    }
}
