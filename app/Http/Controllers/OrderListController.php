<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class OrderListController extends Controller
{
    public function orderList()
    {
        // Fetch data for today's orders, all orders, and pending orders
        $customerDataToday = DB::select("SELECT c.id,s.order_status AS cust_status, c.customer_name AS cust_name,m.f_name AS cust_food_name,d.food_qty AS cust_quantity, c.customer_phone,o.created_at,s.id AS status_id, (d.food_qty * m.f_price) AS cust_total
                                        FROM detail_order d
                                        JOIN menu m ON d.food_id = m.id
                                        JOIN `order` o ON d.order_id = o.id
                                        JOIN customer c ON o.customer_id = c.id
                                        JOIN order_status s ON o.status_id = s.id
                                        WHERE DATE(o.created_at) = CURDATE() AND status_id != 4 AND status_id != 5");
        $customerDataHistory = DB::select("SELECT c.id,s.order_status AS cust_status, c.customer_name AS cust_name,m.f_name AS cust_food_name,d.food_qty AS cust_quantity, c.customer_phone,o.created_at,s.id AS status_id, (d.food_qty * m.f_price) AS cust_total
                                            FROM detail_order d
                                            JOIN menu m ON d.food_id = m.id
                                            JOIN `order` o ON d.order_id = o.id
                                            JOIN customer c ON o.customer_id = c.id
                                            JOIN order_status s ON o.status_id = s.id
                                            WHERE DATE(o.created_at) != CURDATE() AND status_id = 4");
        $customerDataPending = DB::select("SELECT c.id,s.order_status AS cust_status, c.customer_name AS cust_name,m.f_name AS cust_food_name,d.food_qty AS cust_quantity, c.customer_phone,o.created_at,s.id AS status_id, (d.food_qty * m.f_price) AS cust_total
                                            FROM detail_order d
                                            JOIN menu m ON d.food_id = m.id
                                            JOIN `order` o ON d.order_id = o.id
                                            JOIN customer c ON o.customer_id = c.id
                                            JOIN order_status s ON o.status_id = s.id
                                            WHERE DATE(o.created_at) = CURDATE() AND status_id = 1");
        $customerDataConfirmed = DB::select("SELECT c.id,s.order_status AS cust_status, c.customer_name AS cust_name,m.f_name AS cust_food_name,d.food_qty AS cust_quantity, c.customer_phone,o.created_at,s.id AS status_id, (d.food_qty * m.f_price) AS cust_total
                                            FROM detail_order d
                                            JOIN menu m ON d.food_id = m.id
                                            JOIN `order` o ON d.order_id = o.id
                                            JOIN customer c ON o.customer_id = c.id
                                            JOIN order_status s ON o.status_id = s.id
                                            WHERE DATE(o.created_at) = CURDATE() AND status_id = 2");
        $customerDataPreparing = DB::select("SELECT c.id,s.order_status AS cust_status, c.customer_name AS cust_name,m.f_name AS cust_food_name,d.food_qty AS cust_quantity, c.customer_phone,o.created_at,s.id AS status_id, (d.food_qty * m.f_price) AS cust_total
                                            FROM detail_order d
                                            JOIN menu m ON d.food_id = m.id
                                            JOIN `order` o ON d.order_id = o.id
                                            JOIN customer c ON o.customer_id = c.id
                                            JOIN order_status s ON o.status_id = s.id
                                            WHERE DATE(o.created_at) = CURDATE() AND status_id = 3");
        $customerDataCompleted = DB::select("SELECT c.id,s.order_status AS cust_status, c.customer_name AS cust_name,m.f_name AS cust_food_name,d.food_qty AS cust_quantity, c.customer_phone,o.created_at,s.id AS status_id, (d.food_qty * m.f_price) AS cust_total
                                            FROM detail_order d
                                            JOIN menu m ON d.food_id = m.id
                                            JOIN `order` o ON d.order_id = o.id
                                            JOIN customer c ON o.customer_id = c.id
                                            JOIN order_status s ON o.status_id = s.id
                                            WHERE DATE(o.created_at) = CURDATE() AND status_id = 4");
        $customerDataCancelled = DB::select("SELECT c.id,s.order_status AS cust_status, c.customer_name AS cust_name,m.f_name AS cust_food_name,d.food_qty AS cust_quantity, c.customer_phone,o.created_at,s.id AS status_id, (d.food_qty * m.f_price) AS cust_total
                                            FROM detail_order d
                                            JOIN menu m ON d.food_id = m.id
                                            JOIN `order` o ON d.order_id = o.id
                                            JOIN customer c ON o.customer_id = c.id
                                            JOIN order_status s ON o.status_id = s.id
                                            WHERE DATE(o.created_at) = CURDATE() AND status_id = 5");

        // Initialize today arrays to hold data
        $custIdToday = [];
        $custNameToday = [];
        $custFoodToday = [];
        $custQtyToday = [];
        $custCreatedAtToday = [];
        $custTotalToday = [];
        $custTotalRupiahToday = [];
        $custStatusToday = [];
        // Initialize pending arrays to hold data
        $custIdPending = [];
        $custNamePending = [];
        $custFoodPending = [];
        $custQtyPending = [];
        $custCreatedAtPending = [];
        $custTotalPending = [];
        $custTotalRupiahPending = [];
        $custStatusPending = [];
        // Initialize confirmed arrays to hold data
        $custIdConfirmed = [];
        $custNameConfirmed = [];
        $custFoodConfirmed = [];
        $custQtyConfirmed = [];
        $custCreatedAtConfirmed = [];
        $custTotalConfirmed = [];
        $custTotalRupiahConfirmed = [];
        $custStatusConfirmed = [];
        // Initialize preparing arrays to hold data
        $custIdPreparing = [];
        $custNamePreparing = [];
        $custFoodPreparing = [];
        $custQtyPreparing = [];
        $custCreatedAtPreparing = [];
        $custTotalPreparing = [];
        $custTotalRupiahPreparing = [];
        $custStatusPreparing = [];
        // Initialize completed arrays to hold data
        $custIdCompleted = [];
        $custNameCompleted = [];
        $custFoodCompleted = [];
        $custQtyCompleted = [];
        $custCreatedAtCompleted = [];
        $custTotalCompleted = [];
        $custTotalRupiahCompleted = [];
        $custStatusCompleted = [];
        // Initialize cancelled arrays to hold data
        $custIdCancelled = [];
        $custNameCancelled = [];
        $custFoodCancelled = [];
        $custQtyCancelled = [];
        $custCreatedAtCancelled = [];
        $custTotalCancelled = [];
        $custTotalRupiahCancelled = [];
        $custStatusCancelled = [];
        // Initialize history arrays to hold data
        $custIdHistory = [];
        $custNameHistory = [];
        $custFoodHistory = [];
        $custQtyHistory = [];
        $custCreatedAtHistory = [];
        $custTotalHistory = [];
        $custTotalRupiahHistory = [];
        $custStatusHistory = [];

        // Populate arrays for history orders
        foreach ($customerDataHistory as $customers) {
            $custIdHistory[] = $customers->id;
            $custNameHistory[] = $customers->cust_name;
            $custFoodHistory[] = $customers->cust_food_name;
            $custQtyHistory[] = $customers->cust_quantity;
            $custCreatedAtHistory[] = $customers->created_at;
            $custTotalHistory[] = $customers->cust_total;
            // Convert from Vanilla Money to IDR
            $custTotalRupiahHistory[] = number_format($customers->cust_total, 0, ",", ".");
            $custStatusHistory[] = $customers->cust_status;
        }

        // Populate arrays for cancelled orders
        foreach ($customerDataCancelled as $customers) {
            $custIdCancelled[] = $customers->id;
            $custNameCancelled[] = $customers->cust_name;
            $custFoodCancelled[] = $customers->cust_food_name;
            $custQtyCancelled[] = $customers->cust_quantity;
            $custCreatedAtCancelled[] = $customers->created_at;
            $custTotalCancelled[] = $customers->cust_total;
            // Convert from Vanilla Money to IDR
            $custTotalRupiahCancelled[] = number_format($customers->cust_total, 0, ",", ".");
            $custStatusCancelled[] = $customers->cust_status;
        }
        // Populate arrays for completed orders
        foreach ($customerDataCompleted as $customers) {
            $custIdCompleted[] = $customers->id;
            $custNameCompleted[] = $customers->cust_name;
            $custFoodCompleted[] = $customers->cust_food_name;
            $custQtyCompleted[] = $customers->cust_quantity;
            $custCreatedAtCompleted[] = $customers->created_at;
            $custTotalCompleted[] = $customers->cust_total;
            // Convert from Vanilla Money to IDR
            $custTotalRupiahCompleted[] = number_format($customers->cust_total, 0, ",", ".");
            $custStatusCompleted[] = $customers->cust_status;
        }
        // Populate arrays for preparing orders
        foreach ($customerDataPreparing as $customers) {
            $custIdPreparing[] = $customers->id;
            $custNamePreparing[] = $customers->cust_name;
            $custFoodPreparing[] = $customers->cust_food_name;
            $custQtyPreparing[] = $customers->cust_quantity;
            $custCreatedAtPreparing[] = $customers->created_at;
            $custTotalPreparing[] = $customers->cust_total;
            // Convert from Vanilla Money to IDR
            $custTotalRupiahPreparing[] = number_format($customers->cust_total, 0, ",", ".");
            $custStatusPreparing[] = $customers->cust_status;
        }
        // Populate arrays for confirmed orders
        foreach ($customerDataConfirmed as $customers) {
            $custIdConfirmed[] = $customers->id;
            $custNameConfirmed[] = $customers->cust_name;
            $custFoodConfirmed[] = $customers->cust_food_name;
            $custQtyConfirmed[] = $customers->cust_quantity;
            $custCreatedAtConfirmed[] = $customers->created_at;
            $custTotalConfirmed[] = $customers->cust_total;
            // Convert from Vanilla Money to IDR
            $custTotalRupiahConfirmed[] = number_format($customers->cust_total, 0, ",", ".");
            $custStatusConfirmed[] = $customers->cust_status;
        }
        // Populate arrays for pending orders
        foreach ($customerDataPending as $customers) {
            $custIdPending[] = $customers->id;
            $custNamePending[] = $customers->cust_name;
            $custFoodPending[] = $customers->cust_food_name;
            $custQtyPending[] = $customers->cust_quantity;
            $custCreatedAtPending[] = $customers->created_at;
            $custTotalPending[] = $customers->cust_total;
            // Convert from Vanilla Money to IDR
            $custTotalRupiahPending[] = number_format($customers->cust_total, 0, ",", ".");
            $custStatusPending[] = $customers->cust_status;
        }
        // Populate arrays for today's orders
        foreach ($customerDataToday as $customers) {
            $custIdToday[] = $customers->id;
            $custNameToday[] = $customers->cust_name;
            $custFoodToday[] = $customers->cust_food_name;
            $custQtyToday[] = $customers->cust_quantity;
            $custCreatedAtToday[] = $customers->created_at;
            $custTotalToday[] = $customers->cust_total;
            // Convert from Vanilla Money to IDR
            $custTotalRupiahToday[] = number_format($customers->cust_total, 0, ",", ".");
            $custStatusToday[] = $customers->cust_status;
        }

        // Pass data to the view for today's orders
        return view("listorder", [
            // Today Data
            "custIdToday" => $custIdToday,
            "custNameToday" => $custNameToday,
            "custFoodToday" => $custFoodToday,
            "custQtyToday" => $custQtyToday,
            "custCreatedAtToday" => $custCreatedAtToday,
            "custTotalRupiahToday" => $custTotalRupiahToday,
            "custStatusToday" => $custStatusToday,
            // Pending Data
            "custIdPending" => $custIdPending,
            "custNamePending" => $custNamePending,
            "custFoodPending" => $custFoodPending,
            "custQtyPending" => $custQtyPending,
            "custCreatedAtPending" => $custCreatedAtPending,
            "custTotalRupiahPending" => $custTotalRupiahPending,
            "custStatusPending" => $custStatusPending,
            // Confirmed Data
            "custIdConfirmed" => $custIdConfirmed,
            "custNameConfirmed" => $custNameConfirmed,
            "custFoodConfirmed" => $custFoodConfirmed,
            "custQtyConfirmed" => $custQtyConfirmed,
            "custCreatedAtConfirmed" => $custCreatedAtConfirmed,
            "custTotalRupiahConfirmed" => $custTotalRupiahConfirmed,
            "custStatusConfirmed" => $custStatusConfirmed,
            // Preparing Data
            "custIdPreparing" => $custIdPreparing,
            "custNamePreparing" => $custNamePreparing,
            "custFoodPreparing" => $custFoodPreparing,
            "custQtyPreparing" => $custQtyPreparing,
            "custCreatedAtPreparing" => $custCreatedAtPreparing,
            "custTotalRupiahPreparing" => $custTotalRupiahPreparing,
            "custStatusPreparing" => $custStatusPreparing,
            // Completed Data
            "custIdCompleted" => $custIdCompleted,
            "custNameCompleted" => $custNameCompleted,
            "custFoodCompleted" => $custFoodCompleted,
            "custQtyCompleted" => $custQtyCompleted,
            "custCreatedAtCompleted" => $custCreatedAtCompleted,
            "custTotalRupiahCompleted" => $custTotalRupiahCompleted,
            "custStatusCompleted" => $custStatusCompleted,
            // Cancelled Data
            "custIdCancelled" => $custIdCancelled,
            "custNameCancelled" => $custNameCancelled,
            "custFoodCancelled" => $custFoodCancelled,
            "custQtyCancelled" => $custQtyCancelled,
            "custCreatedAtCancelled" => $custCreatedAtCancelled,
            "custTotalRupiahCancelled" => $custTotalRupiahCancelled,
            "custStatusCancelled" => $custStatusCancelled,
            // History Data
            "custIdHistory" => $custIdHistory,
            "custNameHistory" => $custNameHistory,
            "custFoodHistory" => $custFoodHistory,
            "custQtyHistory" => $custQtyHistory,
            "custCreatedAtHistory" => $custCreatedAtHistory,
            "custTotalRupiahHistory" => $custTotalRupiahHistory,
            "custStatusHistory" => $custStatusHistory,
        ]);
    }

    public function update(Request $request)
    {
        // Retrieve the array of IDs and list of status updates
        $listIds = $request->input("index");
        $listCategories = $request->input("listUpdate");

        // Iterate through each pair of ID and status update
        foreach ($listIds as $index => $listId) {
            // Retrieve the corresponding status update for the current ID
            $listCategory = $listCategories[$index];

            if (!is_numeric($listCategory)) {
                $selectId = DB::select("SELECT `id` FROM `order_status` WHERE `order_status` = '$listCategory'");
                $selectedId = $selectId[0]->id;
                // Update the database with the new status
                $designatedDataGet = DB::update("UPDATE `order` SET `status_id` = '$selectedId' WHERE `id` = $listId");
            } else {
                $designatedDataGet = DB::update("UPDATE `order` SET `status_id` = $listCategory WHERE `id` = $listId");
                $updateTheStatus = DB::update("UPDATE `order`
                JOIN `order_status` ON `order`.status_id = `order_status`.id
                SET `order`.cust_status = `order_status`.`order_status`
                WHERE `order`.status_id = `order_status`.id");
            }
        }
        return redirect()->route("dashboard.list");
    }
}
