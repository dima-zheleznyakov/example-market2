<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class MenuCategoryController extends Controller
{

    /**
     * Get catalog for the menu
     *
     */
    public function getMenuCatalog(){

        return Catalog::all();

    }

}
