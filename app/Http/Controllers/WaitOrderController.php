<?php

namespace App\Http\Controllers;

use App\Http\Service\WaitOrderService;
use Illuminate\Http\Request;

class WaitOrderController extends Controller
{
    protected $waitOrderService;

    public function __construct(WaitOrderService $waitOrderService)
    {
        $this->waitOrderService = $waitOrderService;
    }

    function index() {
        $waitOrders = $this->waitOrderService->all();
        return view('wait-order.list',compact('waitOrders'));
    }

    function delete($id) {
        $this->waitOrderService->delete($id);
        return redirect()->route('waitOrders.index');
    }
}
