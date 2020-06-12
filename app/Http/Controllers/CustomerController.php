<?php

namespace App\Http\Controllers;

use App\Http\Service\CustomerService;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        $customers = $this->customerService->paginate(5);

        return view('admin.customers.list', compact('customers'));
    }

    public function edit($id)
    {
        $customer = $this->customerService->findOrFail($id);
        return view('admin.customers.edit', compact('customer'));
    }

    public function update($id, Request $request)
    {
        $customer = $this->customerService->findOrFail($id);
        $customer = $this->customerService->update($customer,$request);
        $this->customerService->save($customer);

        Toastr::success('Chỉnh sửa thành công !', 'Succcess', ["positionClass" => "toast-top-center" , "progressBar" => true]);

        return redirect()->route('customers.index');
    }

    public function delete($id)
    {
        $this->customerService->delete($id);
        Toastr::success('Xóa thành công !', 'Succcess', ["positionClass" => "toast-top-center" , "progressBar" => true]);

        return redirect()->route('customers.index');
    }
}
