<?php

namespace App\Http\Controllers;

use App\Http\Services\Producer\ProducerService;
use Illuminate\Http\Request;

class ProducerController extends Controller
{
    private $service;

    public function __construct(ProducerService $service)
    {
        $this->service = $service;
    }

    public function get()  // read
    {
        $producer = $this->service->get(3);

//        return view('catalog', compact('producer'));
    }

    public function create($request)
    {
        // $data = $request->validated();
        // $newProducer = $this->>service->add($data);

    }
}
