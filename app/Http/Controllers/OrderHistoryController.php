<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OrderHistoryController extends Controller
{
    public function order_history()
    {
        $customerDataCompleted = DB::select("SELECT c.id, c.customer_name AS cust_name,m.f_name AS cust_food_name,d.food_qty AS cust_quantity, c.customer_phone,o.created_at, (d.food_qty * m.f_price) AS cust_total
                                            FROM detail_order d
                                            JOIN menu m ON d.food_id = m.id
                                            JOIN `order` o ON d.order_id = o.id
                                            JOIN customer c ON o.customer_id = c.id
                                            JOIN order_status s ON o.status_id = s.id
                                            WHERE o.status_id = 4
    ");
        $custId = [];
        $custName = [];
        $custPhone = [];
        $custFood = [];
        $custQty = [];
        $custDate = [];
        $custTotal = [];
        $custTotalRupiah = [];

        foreach ($customerDataCompleted as $customers) {
            $custId[] = $customers->id;
            $custName[] = $customers->cust_name;
            $custPhone[] = $customers->customer_phone;
            $custFood[] = $customers->cust_food_name;
            $custQty[] = $customers->cust_quantity;
            $custDate[] = $customers->created_at;
            $custTotal[] = $customers->cust_total;
            $custTotalRupiah[] = number_format($customers->cust_total, 0, ",", ".");
        }

        return view("orderhistory", [
            "custId" => $custId,
            "custName" => $custName,
            "custPhone" => $custPhone,
            "custFood" => $custFood,
            "custQty" => $custQty,
            "custDate" => $custDate,
            "custTotalRupiah" => $custTotalRupiah
        ]);
    }
}
