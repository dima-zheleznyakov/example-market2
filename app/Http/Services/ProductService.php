<?php
namespace App\Http\Services;

use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\UploadedFile;
use Ramsey\Collection\Collection;


class ProductService
{

    protected $repository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->repository = $productRepository;
    }

    /**
     * Get products by catalogID
     *
     * @param int $id Catalog ID
     *
     * @return mixed
     */
    public function getPaginateByCatalogId(int $id)
    {
        return $this->repository->getPaginateByCatalogId($id);
    }

    /**
     * Get products by id
     *
     * @param int $id ID
     *
     * @return mixed
     */
    public function getPaginateById(int $id)
    {
        return $this->repository->getPaginateById($id);
    }

    /**
     * Index paginate
     *
     * @return Product[]|Collection
     */
    public function indexPaginate()
    {
        return $this->repository->index();
    }



}
