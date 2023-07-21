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

        if($user_id != null) {

            $cart_id = Cart::where('user_id', $user_id)->first();

            // Проверяет есть ли запись в таблице Carts
            if (isset($cart_id->user_id)) {
                return $this->addCartsItem($request);
            } else {
                $cart = new Cart();
                $cart->user_id = $user_id;
                $cart->save();
                return $this->addCartsItem($request);
            }

        } else {

            return redirect('login');

        }

    }

    public function addCartsItem($request)
    {

        $cartItem = new CartItem();

        $user_id = Auth::id();

        $cart_id = Cart::where('user_id', $user_id)->first();

        $cartItemGet = CartItem::where('cart_id', $cart_id->id)->get();

        /**
            проверка есть ли уже товар в корзине и если есть добавление количества
            (запись в cart item столб - quantity)
         **/
        $noRepeatQun = false;
        foreach($cartItemGet as $item){
            if((int)$item->product_id == (int)$request->product_id){
                $noRepeatQun = true;
                $cartItemQua = CartItem::find($item->id);
                $cartItemQua->quantity += $request->quantity;
                $cartItemQua->save();
                return redirect()->back()->withSuccess('Товар добавлен в корзину');
            }
        }

        /**
            Создание записи в cart item (добавление товара в корзину)
         **/
        if($noRepeatQun == false){
            $cartItem->product_id = $request->product_id;
            $cartItem->quantity = $request->quantity;
            $cartItem->cart_id = $cart_id->id;
            $cartItem->save();

            return redirect()->back()->withSuccess('Товар добавлен в корзину');
        }

    }


    public function getCartQuantity(){

        return CartItem::all();

    }

    public function updateCartItem(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Проверяем, что значения существуют и являются числами
        if (is_numeric($productId) && is_numeric($quantity)) {
            // Ищем запись в таблице cart_items по product_id (предполагается, что у вас есть соответствующая модель)
            $cartItem = CartItem::where('product_id', $productId)->first();

            // Если запись существует, обновляем количество и сохраняем в базу данных
            if ($cartItem) {
                $cartItem->quantity = $quantity;
                $cartItem->save();
                return response()->json(['success' => true]);
            }
        }

        // Если что-то пошло не так, возвращаем ошибку
        return response()->json(['success' => false]);
    }


    public function delete(Request $request)
    {

        $cartProduct = CartItem::where('product_id', $request->id)->first();

        $deleteProduct = CartItem::find($cartProduct->id);

        $deleteProduct->delete();

        return redirect()->back();

    }

    public function deleteAll()
    {

        $user = Auth::id();

        $cart = Cart::where('user_id', $user)->first();

        CartItem::where('cart_id', $cart->id)->delete();

        return redirect()->back();

    }

}
