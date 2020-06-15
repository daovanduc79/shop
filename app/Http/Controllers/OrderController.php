<?php

namespace App\Http\Controllers;

use App\Http\Service\OrderService;
use Brian2694\Toastr\Facades\Toastr;
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
        Toastr::success('Đơn hàng đã sẵn sàng !', 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('waitOrders.index');
    }

    function delete($id) {
        $this->orderService->delete($id);
        Toastr::success('Xóa đơn hàng thành công !', 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('orders.index');
    }
}
