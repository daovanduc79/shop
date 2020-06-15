<?php


namespace App\Http\Service;


use App\Http\Repository\WaitOrderRepository;

class WaitOrderService extends Service
{
    public function __construct(WaitOrderRepository $waitOrderRepository)
    {
        parent::__construct($waitOrderRepository);
    }

    function delete($id)
    {
        $this->repository->delete($id);
    }
}
