<?php
namespace App\Repositories;

use App\Models\Catalog;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class CatalogRepository
{
    public function index(){
        return Catalog::all();
    }
}
