<?php

namespace App\Http\Controllers;

use App\Http\Services\CatalogService;
use App\Http\Services\ProductService;
use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    private $service;

    private $productService;

    /**
     * Constructor
     *
     * @param CatalogService $catalogService
     */
    public function __construct(CatalogService $catalogService, ProductService $productService)
    {
        $this->service        = $catalogService;
        $this->productService = $productService;

    }

    /**
     * Index catalog
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $catalogs = $this->service->index();
        $products = $this->productService->indexPaginate();

        return view('catalog', compact('catalogs', 'products'));
    }

    /**
     * Get catalog
     *
     * @return Application|Factory|View
     */
    public function get(int $id)
    {
        $catalogs = $this->service->index();
        $products = $this->productService->getPaginateByCatalogId($id);

        return view('catalog', compact('catalogs', 'products'));
    }



}
