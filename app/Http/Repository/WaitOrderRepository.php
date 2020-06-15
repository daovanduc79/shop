<?php


namespace App\Http\Repository;


use App\WaitOrder;

class WaitOrderRepository extends Repository
{
    public function __construct(WaitOrder $waitOrder)
    {
        parent::__construct($waitOrder);
    }

    function delete($id)
    {
        $waitOrder = $this->findOrFail($id);
        foreach ($waitOrder->products->all() as $product) {
            $product->pivot->delete();
            $product->status = 1;
            $product->save();
        }
        $waitOrder->discount->amount += 1;
        $waitOrder->discount->save();
        $waitOrder->delete();
    }
}
