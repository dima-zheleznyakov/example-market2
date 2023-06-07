<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuCategoryController extends Controller
{

    /**
     * Get catalog for the menu
     *
     */
    public function getMenuCatalog(){

        return Catalog::all();

    }

    public function getCartItems()
    {
        $userId = Auth::id();

//        dd($userId);

        if (null === $userId) return null;

        $cart = Cart::where('user_id', $userId)->get();

        return CartItem::where('cart_id', $cart->id)->get();
    }

}
