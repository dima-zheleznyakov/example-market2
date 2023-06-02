<?php

namespace App\Http\Controllers;

use App\Http\Services\CatalogServices;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    private $service;

    public function __construct(CatalogServices $CatalogServices){
        $this->service = $CatalogServices;
    }

    public function get(){
        $catalogs = $this->service->get();
        return view('catalog', compact("catalogs"));
    }
}
