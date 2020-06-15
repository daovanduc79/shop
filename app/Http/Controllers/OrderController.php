<?php

namespace App\Http\Controllers;

use App\Http\Service\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderService;
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    function index() {
        $orders = $this->orderService->all();
        return view('order.list',compact('orders'));
    }

    function create($idWaitOrder) {
        $this->orderService->create($idWaitOrder);
        return redirect()->route('waitOrders.index');
    }
}
