<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = [
            [
                "food_id" => 2,
                "customer_id" => 1,
                "status_id" => 1,
                "cust_name" => null,
                "customer_table" => 1,
                "cust_food_name" => null,
                "cust_price" => null,
                "cust_quantity" => 3,
                "cust_total" => null,
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s")
            ],
            [
                "food_id" => 3,
                "customer_id" => 2,
                "status_id" => 2,
                "cust_name" => null,
                "customer_table" => 2,
                "cust_food_name" => null,
                "cust_price" => null,
                "cust_quantity" => 2,
                "cust_total" => null,
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s")
            ],
            [
                "food_id" => 1,
                "customer_id" => 3,
                "status_id" => 3,
                "cust_name" => null,
                "customer_table" => 1,
                "cust_food_name" => null,
                "cust_price" => null,
                "cust_quantity" => 2,
                "cust_total" => null,
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s")
            ],
            [
                "food_id" => 4,
                "customer_id" => 4,
                "status_id" => 4,
                "cust_name" => null,
                "customer_table" => 4,
                "cust_food_name" => null,
                "cust_price" => null,
                "cust_quantity" => 2,
                "cust_total" => null,
                "created_at" => date("Y-m-d h:i:s"),
                "updated_at" => date("Y-m-d h:i:s")
            ]
        ];
        Order::insert($order);
    }
}
