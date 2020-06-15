<?php


namespace App\Http\Repository;


use App\Order;
use App\OrderProduct;
use App\WaitOrder;

class OrderRepository extends Repository
{
    public function __construct(Order $order)
    {
        parent::__construct($order);
    }

    function create($idWaitOrder) {
        $waitOrder = new WaitOrder();
        $waitOrder = $waitOrder->findOrFail($idWaitOrder);
        $this->model->user_id = $waitOrder->user_id;
        $this->model->discount_id = $waitOrder->discount_id;
        $this->model->name = $waitOrder->id;
        $this->model->totalQty = $waitOrder->totalQty;
        $this->model->totalPrice = $waitOrder->totalPrice;
        $this->model->vat = $waitOrder->vat;
        $this->model->totalOrder = $waitOrder->totalOrder;
        $this->model->payment_method = $waitOrder->totalOrder;
        $this->model->note = $waitOrder->totalOrder;
        $this->model->save();
        foreach ($waitOrder->products->all() as $product) {
            $order_product = new OrderProduct();
            $order_product->order_id = $this->model->id;
            $order_product->product_id = $product->id;
            $order_product->save();
            $product->pivot->delete();
        }
        $waitOrder->delete();
    }
}
