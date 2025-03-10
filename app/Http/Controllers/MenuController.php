<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function menu()
    {
        $menu = DB::select("SELECT id, f_name, f_description, f_category, f_price, DATE(created_at) as created_date FROM menu WHERE deleted_at IS NULL");

        $menuId = [];
        $menuName = [];
        $menuDescription = [];
        $menuCategory = [];
        $menuPrice = [];
        $menuDate = [];

        foreach ($menu as $menus) {
            $menuId[] = $menus->id;
            $menuName[] = $menus->f_name;
            $menuDescription[] = $menus->f_description;
            $menuCategory[] = $menus->f_category;
            $menuPrice[] = $menus->f_price;
            $menuDate[] = $menus->created_date; // Use the extracted date column
        }

        return view("menu", [
            "menuId" => $menuId,
            "menuName" => $menuName,
            "menuDescription" => $menuDescription,
            "menuCategory" => $menuCategory,
            "menuPrice" => $menuPrice,
            "menuDate" => $menuDate
        ]);
    }
}
