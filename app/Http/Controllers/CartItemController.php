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

        if ($user_id === null) {

            return redirect('login');

        } else {

            $cart_id = Cart::where('user_id', $user_id)->first();

            $cart_id = $cart_id->id;

            // Записи cart item пользователя
            $cartItem = CartItem::where('cart_id', $cart_id)->get();

            foreach ($cartItem as $item) {
                $products[] = Product::where('id', $item->product_id)->first();
            }

            if(!empty($products)){
                return view('carts', [
                    'products' => $products,
                    'cartItem' => $cartItem
                ]);
            } else {
                return view('carts');
            }

        }

    }

    public function getCartItems()
    {
        return Cart::all();
    }

}
