<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{

    public function addCarts(Request $request)
    {

        $user_id = Auth::id();

        $cart_id = Cart::where('user_id', $user_id)->first();

        // Проверяет есть ли запись в таблице Carts
        if (isset($cart_id->user_id)){
            return $this->addCartsItem($request);
        } else {
            $cart = new Cart();
            $cart->user_id = $user_id;
            $cart->save();
            return $this->addCartsItem($request);
        }

    }

    public function addCartsItem($request)
    {

        $cartItem = new CartItem();

        $user_id = Auth::id();
        $cart_id = Cart::where('user_id', $user_id)->first();

        $cartItemGet = CartItem::where('cart_id', $cart_id->id)->get();

        $noRepeatQun = false;
        foreach($cartItemGet as $item){
            if((int)$item->product_id == (int)$request->product_id){
                $noRepeatQun = true;
                $cartItemQua = CartItem::find($item->id);
                $cartItemQua->quantity += 1;
                $cartItemQua->save();
                return redirect()->back();
            }
        }
        if($noRepeatQun == false){
            $cartItem->product_id = $request->product_id;
            $cartItem->quantity = 1;
            $cartItem->cart_id = $cart_id->id;
            $cartItem->save();

            return redirect()->back();
        }

    }

}
