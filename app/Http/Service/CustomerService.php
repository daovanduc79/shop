<?php


namespace App\Http\Service;


use App\Http\Repository\CustomerRepository;

class CustomerService extends Service
{
    public function __construct(CustomerRepository $customerRepository)
    {
        parent::__construct($customerRepository);
    }

    public function update($customer, $request)
    {
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        return $customer;
    }
}
