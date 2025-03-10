<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Raw;
use App\Models\Order;
use App\Models\Menu;
use App\Models\OrderStatus;
use App\Models\Customer;

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
        $datas[0][] = DB::select('SELECT id,f_name, f_description, f_price, f_photo FROM `menu` WHERE f_category = "Sandwich"');
        $datas[1][] = DB::select('SELECT id,f_name, f_description, f_price, f_photo FROM `menu` WHERE f_category = "Cake"');
        $datas[2][] = DB::select('SELECT id,f_name, f_description, f_price, f_photo FROM `menu` WHERE f_category = "Coffee"');
        $datas[3][] = DB::select('SELECT id,f_name, f_description, f_price, f_photo FROM `menu` WHERE f_category = "Non Coffee"');
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
        $order->food_id = $ids;
        $order->status_id = 1;
        $status = OrderStatus::where("id", $order->status_id)->firstOrFail();
        $order->cust_quantity = $finalQty;
        $order->customer_id = NULL;
        $order->cust_name = NULL;
        $order->customer_table = NULL;
        $order->cust_food_name = $menu->f_name;
        $order->cust_price = $menu->f_price;
        $order->cust_total = $menu->f_price * $finalQty;
        $order->cust_status = $status->order_status;
        $order->created_at = now();
        $order->deleted_at = NULL;
        $order->updated_at = NULL;
        $order->save();

        $maxId = DB::table('order')->max('id');
        $newAutoIncrement = $maxId + 1;
        DB::statement('ALTER TABLE `order` AUTO_INCREMENT = ' . $newAutoIncrement);

        // Re-arrange IDs starting from 1
        $idsToReArrange = Order::all()->pluck('id')->all();
        sort($idsToReArrange);

        $newId = 1;
        foreach ($idsToReArrange as $id) {
            if ($id != $newId) {
                DB::table('order')->where('id', $id)->update(['id' => $newId]);
            }
            $newId++;
        }

        return redirect()->route('restaurant.cust', ['orderId' => $newId - 1]);
    }

    public function passCust($orderId)
    {
        return view('Components.RestaurantMenu.custdetail', [
            "orderId" => $orderId
        ]);
    }

    public function postCust($orderId, Request $request)
    {
        $orderIds = $orderId;
        $custName = $request->input('cust_name');
        $custPhone = $request->input('cust_phone_number');
        $customer = new Customer();
        $customer->customer_name = $custName;
        $customer->customer_phone = $custPhone;
        $customer->created_at = now();
        $customer->save();

        $order = Order::where('id', $orderIds)->firstOrFail();
        $customerId = $customer->id;
        $order->customer_id = $customerId;
        $order->cust_name = $custName;
        $order->customer_table = NULL;
        $order->save();
    }
}
