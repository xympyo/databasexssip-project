<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = [[
            "customer_name" => "Asep Wijaya",
            "customer_phone" => "081310511234",
            "created_at" => date("Y:m:d h:i:s")
        ], [
            "customer_name" => "Edwing HD",
            "customer_phone" => "081234123445",
            "created_at" => date("Y:m:d h:i:s")
        ], [
            "customer_name" => "Justin Timberlake",
            "customer_phone" => "082310412334",
            "created_at" => date("Y:m:d h:i:s")
        ], [
            "customer_name" => "Zhafira Adelia",
            "customer_phone" => "085939540112",
            "created_at" => date("Y:m:d h:i:s")
        ]];
        Customer::insert($customer);
    }
}
