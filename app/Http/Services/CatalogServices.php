<?php
namespace App\Http\Services;

use App\Repositories\CatalogRepository;
use Illuminate\Http\UploadedFile;

class CatalogServices {
    protected $repository;


    public function __construct(CatalogRepository $CatalogRepository){
        $this->repository = $CatalogRepository;
    }
    public function get(){
        $model = $this->repository->get();
        return $model;
    }
}
