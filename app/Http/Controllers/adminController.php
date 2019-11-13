<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image;
use App\Models\View;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function getadmin(){
    	return view('admin.home');
    }
    public function user_list(){
    	return view('admin.user.list');
    }
      public function list_category(){
          $category=Category::all();
    	return view('admin.category.list',compact('category'));
    }
    public function add_category(){
    	return view('admin.category.add');
    }
    public function addnewcategory(Request $req ){
        $this->validate($req,[
            'name' => 'required|min:5|max:35',
            'description' => 'required|min:5|max:35',
            'slug' => 'required|min:5|max:35',
        ]);
            $category=new Category;
            $category->name=$req->name;
            $category->description=$req->description;
            $category->slug=$req->slug;
            $category->save();
            return redirect()->back()->with('success', 'Category '. $category->name. ' added');
    }
    public function category_delete($id){
        $category=Category::find($id);
        $category->delete();
        return redirect()->back()->with('success', 'Category '. $category->name. ' deleted');
    }
    public function category_edit($id){
        $category=Category::find($id);
    	return view('admin.category.edit',compact('category'));
    }
    public function editcategory_save( Request $req,$id){
        $this->validate($req,[
            'name' => 'required|min:5|max:35',
            'description' => 'required|min:5|max:35',
            'slug' => 'required|min:5|max:35',
        ]);
        $category=Category::find($id);
        $cate=$req->all();
        $category->update($cate);
        return redirect()->back()->with('success', 'Category '. $category->name. ' updated');
    }
    public function list_product(){
        $product=Product::all();
    	return view('admin.product.list',compact('product'));
    }
    public function add_product(){
        $category=Category::all();
    	return view('admin.product.add',compact('category'));
    }
    public function add_product_save(Request $req){
        $this->validate($req,[
            'name' => 'required|min:5|max:255',
            'description' => 'required|min:5',
            'price' => 'required|numeric',
            'sale' => 'required|numeric',
            'quantity' => 'required|numeric'
        ]);
        $file = $req->file('image');
        $data['image']=$file->getClientOriginalName();
        $file->move(base_path('public/source/image/product/'), $file->getClientOriginalName());
        $image=new image;
        $image->name=$file->getClientOriginalName();  
        $image->image_url='image/product/'.$file->getClientOriginalName();
        $image->image_alt='image/product/'.$file->getClientOriginalName();
        $image->save();
        $view=new View;
        $view->count=0;
        $view->save();
        $product= new Product;
        $pro=$req->all();
        $pro['view_id']=$view->id;
        $pro['image_id']=$image->id;
        $product->create($pro);
        return redirect()->back()->with('success', 'Product '. $product->name. ' added');
    }
    public function product_detail($id){
        $product=Product::find($id);
        return redirect()->back()->with('product',$product  );
    }
}
