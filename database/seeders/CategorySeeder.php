<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [
                "categories" => "Food",
            ],
            [
                "categories" => "Coffee",
            ],
            [
                "categories" => "Non Coffee",
            ]
        ];

        Category::insert($category);
    }
}
