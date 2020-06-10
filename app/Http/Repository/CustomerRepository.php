<?php


namespace App\Http\Repository;


use App\Customer;

class CustomerRepository extends Repository
{
    public function __construct(Customer $customer)
    {
        parent::__construct($customer);
    }

    public function create()
    {
        return new Customer();
    }
}
