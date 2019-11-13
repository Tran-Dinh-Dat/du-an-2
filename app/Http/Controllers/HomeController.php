<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$request->user()->authorizeRoles(['user', 'admin']);
        $products=Product::all();
        // $product_top=Product::where('category_id','<>',1)->paginate(8);
        $categories=Category::all();
        return view('frontend.index',compact('products','categories'));
    }
  
    public function proDetail($id){
        $product_detail=Product::find($id);
        return view('frontend.proDetail',compact('product_detail'));
    }
    public function getLoaisp($type){
        $sp_theoloai=Product::where('category_id',$type)->get();
        $sp_khac=Product::where('category_id','<>',$type)->paginate(3);
        $loai=Category::all();
        $loai_s=Category::where('id',$type)->first();
    	return view('frontend.loaisp',compact('sp_theoloai','sp_khac','loai','loai_s'));
    }
}
