<?php

use App\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->name = 'nam';
        $customer->email = 'nam@gmail.com';
        $customer->password = Hash::make('123456');
        $customer->phone = '0128736736';
        $customer->address = 'Ha noi';
        $customer->save();
    }
}
