<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{



    public function index()
    {

        $user_id = Auth::id();
        $cart_id = Cart::where('user_id', $user_id)->first();

        $cart_id = $cart_id->id;

        // Записи cart item пользователя
        $cartItem = CartItem::where('cart_id', $cart_id)->get();

        foreach($cartItem as $item){
            $products[] = Product::where('id', $item->product_id)->first();
        }

        return view('carts', [
            'products' => $products
        ]);

    }

}
