<?php

namespace App\Http\Controllers;

use App\Http\Services\CatalogService;
use App\Http\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $service;
    private $catalogService;

    public function __construct(ProductService $productService, CatalogService $catalogSerive){
        $this->service        = $productService;
        $this->catalogService = $catalogSerive;
    }

    public function get(int $id){
        $catalogs = $this->catalogService->index();
        $product = $this->service->getPaginateById($id);

        return view('product.products_detail', compact('catalogs','product'));
    }
}
