<?php


namespace App\Http\Repository;


use App\WaitOrder;

class ShopRepository
{
    protected $waitOrder;
    public function __construct(WaitOrder $waitOrder)
    {
        $this->waitOrder = $waitOrder;
    }

    function save($waitOrder) {
        $this->waitOrder->save($waitOrder);
    }
}
