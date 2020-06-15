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

    function update($id, $request) {
        $waitOrder = $this->findOrFail($id);
        $waitOrder->note = $request->note;
        $waitOrder->payment_method = $request->payment_method;
        $this->save($waitOrder);
    }
}
