<?php
namespace App\Http\Services;

use App\Repositories\ProductRepository;
use Illuminate\Http\UploadedFile;


class ProductServices
{
    protected $repository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->repository = $productRepository;
    }

    public function get(){
        $model = $this->repository->get();
        return $model;
    }
}
