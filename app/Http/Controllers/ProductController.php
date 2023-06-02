<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductServices;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $services;

    public function __construct(ProductServices $productServices){
        $this->services = $productServices;
    }

    public function get(){
        $product = $this->services->get();
        return view('catalog', compact('product'));
    }
}
