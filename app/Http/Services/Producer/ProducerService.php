<?php


namespace App\Http\Services\Producer;


use App\Repositories\ProducerRepository;

use Illuminate\Http\UploadedFile;

class ProducerService
{
    protected $repository;

    public function __construct(ProducerRepository $producerRepository)
    {
        $this->repository = $producerRepository;
    }

    /**
     * список с пагинацией
     */
    public function indexPaginate($params)
    {

    }
    /**
     * Эпизод
     */
    public function get(int $id)
    {
        $model = $this->repository->get($id);

        if(is_null($model)) {
            return null;
        }

        return $model;
    }

}
