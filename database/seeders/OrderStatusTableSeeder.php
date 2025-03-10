<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order_status = [[
            "order_status" => "Pending",
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "order_status" => "Confirmed",
            "created_at" => date("Y-m-d h:i:s")
        ], [
            "order_status" => "Preparing",
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "order_status" => "Completed",
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "order_status" => "Cancelled",
            "created_at" => date("Y-m-d h:i:s"),
        ]];
        OrderStatus::insert($order_status);
    }
}
