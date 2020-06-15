<?php

namespace App\Http\Controllers;

use App\Http\Service\WaitOrderService;
use Brian2694\Toastr\Facades\Toastr;
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
        Toastr::success('Xóa đơn hàng thành công !', 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('waitOrders.index');
    }

    function edit($id) {
        $waitOrder = $this->waitOrderService->findOrFail($id);
        return view('wait-order.edit', compact('waitOrder'));
    }

    function update($id, Request $request) {
        $this->waitOrderService->update($id, $request);
        Toastr::success('Cập nhật đơn hàng thành công !', 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('waitOrders.index');
    }
}
