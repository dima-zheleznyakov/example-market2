<?php
namespace App\Repositories;

use App\Models\CartItem;
use App\Models\Catalog;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class CartItemRepository
{
    public function index($cartId)
    {
        return CartItem::where('cart_id', $cartId)->get();
    }

    public function addToCart(array $data): CartItem
    {
        return CartItem::Create($data);
    }
}
