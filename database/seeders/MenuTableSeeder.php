<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu = [[
            "f_name" => "Bagel Sandwich",
            "f_description" => "With Cream Cheese",
            "f_price" => "37500",
            "f_rating" => null,
            "f_photo" => "bagel_sandwich",
            "f_category" => 1,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Sandwich",
            "f_description" => "Chicken Sandwich",
            "f_price" => "45000",
            "f_rating" => null,
            "f_photo" => "sandwich",
            "f_category" => 1,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "French Fries",
            "f_description" => "With Dipping Sauce",
            "f_price" => "18500",
            "f_rating" => null,
            "f_photo" => "french_fries",
            "f_category" => 1,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Fruit Salad",
            "f_description" => "Tropical Fruits",
            "f_price" => "35000",
            "f_rating" => null,
            "f_photo" => "fruit_salad",
            "f_category" => 1,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Cheese Cake",
            "f_description" => "Cake",
            "f_price" => "38000",
            "f_rating" => null,
            "f_photo" => "cheese_cake",
            "f_category" => 1,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Chocolate Brownies",
            "f_description" => "Cake",
            "f_price" => "32000",
            "f_rating" => null,
            "f_photo" => "chocolate_brownies",
            "f_category" => 1,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Banana Bread",
            "f_description" => "Cake",
            "f_price" => "25000",
            "f_rating" => null,
            "f_photo" => "banana_bread",
            "f_category" => 1,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Croissant",
            "f_description" => "Pastry",
            "f_price" => "22500",
            "f_rating" => null,
            "f_photo" => "croissant",
            "f_category" => 1,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Affogato",
            "f_description" => "With Ice Cream",
            "f_price" => "37500",
            "f_rating" => null,
            "f_photo" => "affogato",
            "f_category" => 2,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Espresso",
            "f_description" => "Strong Shot",
            "f_price" => "18000",
            "f_rating" => null,
            "f_photo" => "espresso",
            "f_category" => 2,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Americano",
            "f_description" => "Diluted Espresso",
            "f_price" => "20000",
            "f_rating" => null,
            "f_photo" => "americano",
            "f_category" => 2,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Cappucino",
            "f_description" => "Espresso Forth",
            "f_price" => "22500",
            "f_rating" => null,
            "f_photo" => "cappucino",
            "f_category" => 2,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Latte",
            "f_description" => "Espresso Steamed",
            "f_price" => "22500",
            "f_rating" => null,
            "f_photo" => "latte",
            "f_category" => 2,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Mocha",
            "f_description" => "Espresso Chocolate",
            "f_price" => "28000",
            "f_rating" => null,
            "f_photo" => "mocha",
            "f_category" => 3,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Hot Chocolate",
            "f_description" => "Rich Cocoa",
            "f_price" => "27000",
            "f_rating" => null,
            "f_photo" => "hot_chocolate",
            "f_category" => 3,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Vanilla Latte",
            "f_description" => "Creamy Vanilla",
            "f_price" => "27000",
            "f_rating" => null,
            "f_photo" => "vanilla_latte",
            "f_category" => 3,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Smoothies",
            "f_description" => "Blended Fruits",
            "f_price" => "32000",
            "f_rating" => null,
            "f_photo" => "smoothies",
            "f_category" => 3,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Lemonade",
            "f_description" => "Citrus Refreshment",
            "f_price" => "18000",
            "f_rating" => null,
            "f_photo" => "lemonade",
            "f_category" => 3,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Green Tea",
            "f_description" => "Leafy Infusion",
            "f_price" => "17500",
            "f_rating" => null,
            "f_photo" => "green_tea",
            "f_category" => 3,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Chamomile Tea",
            "f_description" => "Calming Infusion",
            "f_price" => "22500",
            "f_rating" => null,
            "f_photo" => "chamomile_tea",
            "f_category" => 3,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Earl Grey Tea",
            "f_description" => "Citrusy Bergamot",
            "f_price" => "22500",
            "f_rating" => null,
            "f_photo" => "earl_grey_tea",
            "f_category" => 3,
            "created_at" => date("Y-m-d h:i:s"),
        ], [
            "f_name" => "Matcha Latte",
            "f_description" => "Creamy Green Tea",
            "f_price" => "28000",
            "f_rating" => null,
            "f_photo" => "matcha_latte",
            "f_category" => 3,
            "created_at" => date("Y-m-d h:i:s"),
        ],];
        Menu::insert($menu);
    }
}
