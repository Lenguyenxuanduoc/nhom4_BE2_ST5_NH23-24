<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("cars")->insert([
            [
                "name"=>"Ford Mustang", 
                "manufacturer_id"=>"5", 
                "category_id"=>"4", 
                "price"=>"34105", 
                "description"=>"", 
                "quantity"=>"3", 
                "producing_year"=>"2024",
                "images"=>json_encode(["mustang1.jpg", "mustang2.jpg", "mustang3.jpg", "mustang4.jpg", "mustang5.jpg"])
            ],
            [
                "name"=>"Lamborghini Huracan", 
                "manufacturer_id"=>"7", 
                "category_id"=>"10", 
                "price"=>"234405", 
                "description"=>"", 
                "quantity"=>"5", 
                "producing_year"=>"2023",
                "images"=>json_encode(["huracan1.jpg", "huracan2.jpg", "huracan3.jpg", "huracan4.jpg", "huracan5.jpg"])
            ],
            [
                "name"=>"McLaren 720S", 
                "manufacturer_id"=>"8", 
                "category_id"=>"11", 
                "price"=>"330993", 
                "description"=>"", 
                "quantity"=>"2", 
                "producing_year"=>"2023",
                "images"=>json_encode(["720s1.jpg", "720s2.jpg", "720s3.jpg", "720s4.jpg", "720s5.jpg"])
            ],
            [
                "name"=>"Nissan GT-R", 
                "manufacturer_id"=>"9", 
                "category_id"=>"10", 
                "price"=>"140277", 
                "description"=>"", 
                "quantity"=>"3", 
                "producing_year"=>"2024",
                "images"=>json_encode(["gtr1.jpg", "gtr2.jpg", "gtr3.jpg", "gtr4.jpg", "gtr5.jpg"])
            ]
        ]);
    }
}
