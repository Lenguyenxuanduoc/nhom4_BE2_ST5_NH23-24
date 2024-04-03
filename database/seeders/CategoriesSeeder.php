<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("categories") -> insert([
            ["name" => "SUV"],
            ["name" => "Sedan"],
            ["name" => "Truck"],
            ["name" => "Coupe"],
            ["name" => "Van"],
            ["name" => "Hybrid"],
            ["name" => "Electric Car"],
            ["name" => "Hatchback"],
            ["name" => "Luxury Car"],
            ["name" => "Sports Car"],
            ["name" => "Convertible"]
        ]); 

    }
}
