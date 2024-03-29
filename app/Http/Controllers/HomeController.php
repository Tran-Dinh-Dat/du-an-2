<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use App\Models\Slideshow;
use App\Models\View;
use App\Models\Profile;
use App\Models\Comment;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        $products = Product::with('view')->paginate(8);
        $new_products = Product::with('view')->orderBy('id', 'desc')->paginate(8);
        $categories = Category::all();
        $slideshows = Slideshow::all();  
        return view('frontend.index',compact('products', 'new_products', 'categories', 'slideshows'));
    }
  
    public function productDetail($id){
        $product_detail = Product::find($id);
        $category = $product_detail->category;
        $images = $product_detail->images;
        $related_products = Product::with('category')->where('category_id', $category->id)->get();

        $view = View::where('product_id',$id)->first();
        $view->count +=1;
        $view->save();
        return view('frontend.productDetail',compact('product_detail', 'category', 'images', 'related_products'));
    }

    public function categories($id = 'all'){
        $categories = Category::all();
        if ($id != 'all') {
            $cate_products = Product::where('category_id', $id)->get();
        } 
        else {
            $cate_products = Product::all();
        }
    	return view('frontend.categories',compact('categories', 'cate_products'));
    }

    public function comment(Request $request, $id)
    {
        $comment = Comment::create([
            'user_id' => Auth::user()->id,
            'product_id' => $id,
            'content' => $request->content,
            'status' => 1
        ]);
        return back();
    }
}
