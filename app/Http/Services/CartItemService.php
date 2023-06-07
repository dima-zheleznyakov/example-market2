<?php
namespace App\Http\Services;

use App\Models\CartItem;
use App\Repositories\CartItemRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\UploadedFile;

class CartItemService
{

    /**
     * Catalog repository
     *
     * @var CartItemRepository
     */
    protected $repository;

    /**
     * Constructor
     *
     * @param CartItemRepository $cartRepository
     */
    public function __construct(CartItemRepository $cartRepository)
    {
        $this->repository = $cartRepository;
    }

    /**
     * Get Catalog
     *
     * @return CartItem[]|Collection
     */
    public function index(int $cartId)
    {
        return $this->repository->index($cartId);
    }

    public function addToCart(array $data): CartItem
    {
        $this->repository->addToCart($data);
    }
}
