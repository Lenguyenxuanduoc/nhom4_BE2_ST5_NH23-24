<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManufacturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("manufacturers") -> insert([
            ["name" => "BMW", "image" => "bmw.jpg"],
            ["name" => "Chevrolet", "image" => "chevrolet.jpg"],
            ["name" => "Dodge", "image" => "dodge.jpg"],
            ["name" => "Ferrari", "image" => "ferrari.jpg"],
            ["name" => "Ford", "image" => "ford.jpg"],
            ["name" => "Huyndai", "image" => "huyndai.jpg"],
            ["name" => "Lamborghini", "image" => "lamborghini.jpg"],
            ["name" => "McLaren", "image" => "mclaren.jpg"],
            ["name" => "Nissan", "image" => "nissan.jpg"],
            ["name" => "Porsche", "image" => "porsche.jpg"],
            ["name" => "Toyota", "image" => "toyota.jpg"]
        ]);
    }
}

