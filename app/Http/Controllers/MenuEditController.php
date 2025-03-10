<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class MenuEditController extends Controller
{
    public function passData(Request $request)
    {
        $menuId = $request->query('id');

        // Fetch data from the menu table based on the provided menuId
        $data = DB::select('SELECT id, f_name, f_description, f_price, f_category
            FROM `menu` WHERE id = ?', [$menuId]);

        $category = DB::select('SELECT categories FROM `category`');
        $categories = [];
        foreach ($category as $cat) {
            $categories[] = $cat->categories;
        }

        // Check if the $data array is not empty before accessing index 0
        if (!empty($data)) {
            $f_id = $data[0]->id;
            $f_names = $data[0]->f_name;
            $f_desc = $data[0]->f_description;
            $f_price = $data[0]->f_price;
            $f_category = $data[0]->f_category;
        } else {
            // Handle the case where no records are found for the provided menuId
            // You can redirect the user or display an error message
            // For example:
            return redirect()->back()->with('error', 'No menu item found for the provided ID.');
        }

        return view("Components.Menu.menuedit", [
            "f_id" => $f_id,
            "f_names" => $f_names,
            "categories" => $categories,
            "f_desc" => $f_desc,
            "f_price" => $f_price,
            "f_category" => $f_category,
            'menuId' => $menuId
        ]);
    }


    public function giveStorePage()
    {
        $category = DB::select('SELECT categories FROM `category`');
        $categories = [];
        foreach ($category as $cat) {
            $categories[] = $cat->categories;
        }
        return view("Components.Menu.menustore", [
            "categories" => $categories
        ]);
    }
    public function store(Request $request)
    {
        $countOrder = DB::select('SELECT COUNT(id) as count FROM menu WHERE deleted_at IS NULL');
        $count = $countOrder[0]->count;

        // Reset the auto-increment value to start from 1
        DB::statement('ALTER TABLE menu AUTO_INCREMENT = ' . ($count + 1));

        // Now you can proceed with inserting the new record
        $data = $request->validate([
            'foodName' => 'required',
            'foodDesc' => 'nullable',
            'foodPrice' => 'required'
        ]);

        $data['f_name'] = $data['foodName'];
        $data['f_description'] = $data['foodDesc'];
        $data['f_price'] = $data['foodPrice'];
        $data['f_category'] = $request->input('foodCategory');
        $data['created_at'] = now();

        // Create the new product with auto-incremented ID
        $newProduct = Menu::create($data);

        return redirect()->route('dashboard.menu');
    }



    public function edit(Request $request)
    {
        $request->validate([
            'foodId' => 'required|exists:menu,id', // Ensure the menu ID exists
            'foodName' => 'required',
            'foodDesc' => 'required',
            'foodPrice' => 'required|numeric',
            'foodCategory' => 'required'
        ]);

        $foodId = $request->input('foodId');
        $foodName = $request->input('foodName');
        $foodDesc = $request->input('foodDesc');
        $foodPrice = $request->input('foodPrice');
        $foodCategory = $request->input('foodCategory');

        $menu = Menu::find($foodId);
        $menu->f_name = $foodName;
        $menu->f_description = $foodDesc;
        $menu->f_price = $foodPrice;
        $menu->f_category = $foodCategory;
        $menu->save();

        return redirect()->route('dashboard.menu');
    }

    public function passDataDelete(Request $request)
    {
        $menuId = $request->query('id');

        $data = DB::select('SELECT id,f_name, f_description, f_price, f_category
        FROM `menu` WHERE id = ?', [$menuId]);

        $f_id = $data[0]->id;
        $f_names = $data[0]->f_name;

        return view("Components.Menu.menudelete", [
            "f_id" => $f_id,
            "f_names" => $f_names,
        ]);
    }

    public function delete(Request $request)
    {
        $foodId = $request->input("foodId");
        $menu = Menu::find($foodId);

        if ($menu) {
            $menu->delete();
            // Get the maximum ID in the menu table
            $maxValue = DB::table('menu')->max('id');

            // Get all deleted rows with non-null deleted_at values
            $deletedRows = DB::table('menu')->whereNotNull('deleted_at')->get();

            // Update each deleted row with the maximum ID plus its index in the array plus 1
            foreach ($deletedRows as $index => $deletedRow) {
                DB::table('menu')->where('id', $deletedRow->id)->update(['id' => $maxValue + $index + 1]);
            }

            // Retrieve all undeleted records ordered by their IDs
            $undeletedMenus = Menu::whereNull('deleted_at')->orderBy('id')->get();

            // Reassign IDs starting from 1
            foreach ($undeletedMenus as $index => $undeletedMenu) {
                $undeletedMenu->id = $index + 1;
                $undeletedMenu->save();
            }
        }
        return redirect()->route('dashboard.menu');
    }
}
