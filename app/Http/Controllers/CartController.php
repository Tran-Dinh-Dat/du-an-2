<?php

namespace App\Http\Controllers;
use Cart;
use Illuminate\Http\Request;
use App\Models\Product;
class CartController extends Controller
{
    public function addCart(Request $request, $id)
    {
        $product = Product::find($id);
        if($request->quantity) {
            $quantity = $request->quantity;
        } else {
            $quantity = 1;
        }

        if ($product->sale > 0) {
            $price = $product->sale;
        } else {
            $price = $product->price;
        }
        $cart = [
            'id' => $id,
            'name' => $product->name,
            'qty' =>$product->quantity,
            'price' => $product->price,
            'options' => [''],
        ];

        Cart::add($cart);
        dd(Cart::content());
    }
}
