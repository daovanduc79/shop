<?php


namespace App\Http\Service;


use App\Http\Repository\OrderRepository;

class OrderService extends Service
{
    public function __construct(OrderRepository $orderRepository)
    {
        parent::__construct($orderRepository);
    }

    function create($idWaitOrder)
    {
        $this->repository->create($idWaitOrder);
    }
}

