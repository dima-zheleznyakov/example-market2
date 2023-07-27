<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{

    public function order(Request $request)
    {

        $name = $request->name;
        $number = $request->number;
        $comment = $request->comment;

        $to_name = 'order';
        $to_email = 'growth.pharmaceutical.kz@gmail.com';

        $user = Auth::id();
        $carts = Cart::where('user_id', $user)->first();

        $cartItems = CartItem::where('cart_id', $carts->id)->get();

        foreach ($cartItems as $cartItem){

            $orders[] = Product::where('id', $cartItem->product_id)->get();

            for ($i = 0; $i <= count($cartItems); $i++){
                foreach ($orders as $order){
                    foreach ($order as $item){
                        if ($item->id === $cartItem->product_id){
                            $item->quantity = $cartItem->quantity;
                        }
                    }
                }
            }

        }

        $data = array(
            "name"=>$name,
            "number" => $number,
            "comment" => $comment,
            "orders" => $orders
        );

        Mail::send('emails.order', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('growth-pharmaceutical.kz');
            $message->from('info@gmail.com','Новый заказ');
        });


        $cartItems->each->delete();

        return redirect()->back()->withSuccess("Спасибо, ваш заказ оформлен! Ожидайте звонка менеджера");

    }

}
