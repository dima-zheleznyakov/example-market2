<?php
namespace App\Http\Services;

use App\Models\Catalog;
use App\Repositories\CatalogRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\UploadedFile;

class CatalogService
{

    /**
     * Catalog repository
     *
     * @var CatalogRepository
     */
    protected $repository;

    /**
     * Constructor
     *
     * @param CatalogRepository $catalogRepository
     */
    public function __construct(CatalogRepository $catalogRepository)
    {
        $this->repository = $catalogRepository;
    }

    /**
     * Get Catalog
     *
     * @return Catalog[]|Collection
     */
    public function index()
    {
        return $this->repository->index();
    }
}
