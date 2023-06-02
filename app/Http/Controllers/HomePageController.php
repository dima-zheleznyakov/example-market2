<?php

namespace App\Http\Controllers;

use App\Http\Services\CatalogService;
use App\Http\Services\ProductServices;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    private $catalogService;

    public function __construct(CatalogService $catalogService){
        $this->catalogService = $catalogService;
    }

    public function index(){
        $catalogs = $this->catalogService->index();

        return view('index', compact('catalogs'));
    }
}
