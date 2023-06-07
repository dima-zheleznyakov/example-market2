<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCartItemRequest;
use App\Http\Services\CartItemService;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    private $cartItemServiceservice;

    public function __construct(CartItemService $cartItemServiceservice)
    {
        $this->cartItemServiceservice = $cartItemServiceservice;
    }

    public function index()
    {

        $userId = auth()->id();

        $cart = Cart::where('user_id', $userId)->get();

        if (null === $cart) {
            return response()->json([
                'success' => 'false',
                'message' => 'Для начала создайте корзину для пользователя ' . $userId
            ]);
        }

        return $this->cartItemServiceservice->index($cart->id);
    }

    /**
     * Add to cart
     *
     * @param PostCartItemRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addToCart(PostCartItemRequest $request)
    {
//        session()->put('cart', $request->post('cart'));
        $userId = auth()->id();

        $cart = Cart::where('user_id', $userId)->get();

        if (null === $cart) {
            return response()->json([
                'success' => 'false',
                'message' => 'Для начала создайте корзину для пользователя ' . $userId
            ]);
        }

        $data = $request->validated();
        $data['cart_id'] = $cart->id;

        $cartItem = $this->cartItemServiceservice->addToCart($data);

        if (null === $cartItem) {
            return response()->json([
                'success' => 'false',
                'message' => 'Ошибка в добавлении в корзину'
            ]);
        }

        return response()->json([
            'success' => 'true',
            'cart_items_id' => $cartItem->id
        ]);
    }
}
