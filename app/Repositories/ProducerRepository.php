<?php


namespace App\Repositories;


use App\Models\Producer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class ProducerRepository
{

    public function get(int $id) : ?Producer
    {
        return Producer::find($id); // Select * from producers where id = 12;
    }
}
