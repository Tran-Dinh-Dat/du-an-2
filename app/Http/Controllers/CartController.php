<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
use Cart;

class CartController extends Controller
{
    public function addCart(Request $request, $id)
    {
        $product = Product::find($id);
        if($request->qty) {
            $qty = $request->quantity;
        } else {
            $qty = 1;
        }

        if ($product->sale > 0) {
            $price = $product->sale;
        } else {
            $price = $product->price;
        }
        $cart = [
            'id' => $id,
            'name' => $product->name,
            'qty' => $qty,
            'price' => $product->price,
            'options' => [
                'img' => $product->image
            ],
        ];

        Cart::add($cart);
        // dd(Cart::content());
        return back()->with('success', 'Đã mua ' . $product->name . 'thành công!');
    }

    public function cart()
    {
        $cart = Cart::content();
        // Cart::destroy();
        return view('frontend.cart', compact('cart'));
<<<<<<< HEAD
=======
    }

    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            Cart::update($id, $request->qty);
            return  response()->json(['success', 'Cập nhật giỏ hàng thành công!']);
        }
    }

    public function destroy(Request $request, $id)
    {
        Cart::remove($id);
        return response()->json(['success', 'Xóa sản phẩm thành công!']);
>>>>>>> add cart and show product, category
    }
}
