<?php
namespace App\Repositories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class ProductRepository
{
    /**
     * Index
     *
     * @return LengthAwarePaginator
     */
    public function index(): LengthAwarePaginator
    {
        return Product::orderBy('created_at', 'desc')->paginate(12);
    }

    public function getPaginateByCatalogId(int $catalogId)
    {
        return Product::where('catalog_id', '=', $catalogId)->orderBy('created_at', 'desc')->paginate(12);
    }

    public function getPaginateById(int $id)
    {
        return Product::where('id', '=', $id)->first();
    }

}
