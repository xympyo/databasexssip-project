<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Raw;
use App\Models\Order;
use App\Models\Menu;
use App\Models\OrderStatus;
use App\Models\Customer;
use App\Models\DetailOrder;

class RestaurantMenuController extends Controller
{
    public function passMenu()
    {
        $category = DB::select('SELECT categories,id FROM `category`');

        $categories = [];
        $id = [];

        foreach ($category as $cat) {
            $categories[] = $cat->categories;
            $id[] = $cat->id;
        }

        $datas = [[]];
        $datas[0][] = DB::select('SELECT id,f_name, f_description, f_price, f_photo FROM `menu` WHERE f_category = 1');
        $datas[1][] = DB::select('SELECT id,f_name, f_description, f_price, f_photo FROM `menu` WHERE f_category = 2');
        $datas[2][] = DB::select('SELECT id,f_name, f_description, f_price, f_photo FROM `menu` WHERE f_category = 3');
        // Initialize arrays
        $ids = [];
        $fName = [];
        $fDesc = [];
        $fPrice = [];
        $fPhoto = [];

        foreach ($datas as $outerIndex => $outer) {
            foreach ($outer as $innerIndex => $inner) {
                foreach ($inner as $item) {
                    // Append to arrays
                    $fName[$outerIndex][] = $item->f_name;
                    $fDesc[$outerIndex][] = $item->f_description;
                    $fPrice[$outerIndex][] = number_format($item->f_price, 0, ',', '.');
                    $fPhoto[$outerIndex][] = $item->f_photo;
                    $ids[$outerIndex][] = $item->id;
                }
            }
        }

        return view('restaurantmenu', [
            "categories" => $categories,
            "id" => $id,
            "ids" => $ids,
            "fName" => $fName,
            "fDesc" => $fDesc,
            "fPrice" => $fPrice,
            "fPhoto" => $fPhoto
        ]);
    }

    public function menuDetail($id, $name)
    {
        // dd('menuDetail called');
        $datas = DB::select('SELECT id,f_name, f_description, f_price, f_photo FROM `menu` WHERE id =?', [$id]);

        $price = number_format($datas[0]->f_price, 0, ',', '.');

        return view('Components.RestaurantMenu.menudetail', [
            "datas" => $datas,
            "price" => $price
        ]);
    }

    public function custDetail($id, Request $request)
    {
        // dd('custDetail called');
        $ids = $id;
        $finalQty = $request->input("final_qty");
        $menu = Menu::where('id', $ids)->firstOrFail();

        $order = new Order();
        $order->status_id = 1;
        $order->created_at = now();
        $order->updated_at = now();
        $order->save(); // Save the order first to get the ID

        $detail_order = new DetailOrder();
        $detail_order->order_id = $order->id; // Now order_id is valid
        $detail_order->food_id = $ids;
        $detail_order->food_qty = $finalQty;
        $detail_order->created_at = now();
        $detail_order->updated_at = now();
        $detail_order->save(); // Save after order is created


        $maxId = DB::table('order')->max('id');

        return redirect()->route('restaurant.cust', ['orderId' => $maxId]);
    }

    public function passCust($orderId)
    {
        return view('Components.RestaurantMenu.custdetail', [
            "orderId" => $orderId
        ]);
    }

    public function postCust($orderId, Request $request)
    {
        $custName = $request->input('cust_name');
        $custPhone = $request->input('cust_phone_number');
        $customer = new Customer();
        $customer->customer_name = $custName;
        $customer->customer_phone = $custPhone;
        $customer->created_at = now();
        $customer->save();

        $order = Order::where('id', $orderId)->firstOrFail();
        $order->customer_id = $customer->id;
        $order->save();
    }
}
