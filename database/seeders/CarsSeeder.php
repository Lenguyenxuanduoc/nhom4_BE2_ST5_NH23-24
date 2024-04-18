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
                // 1
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
                // 2
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
                // 3
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
                // 4
                "name"=>"Nissan GT-R", 
                "manufacturer_id"=>"9", 
                "category_id"=>"10", 
                "price"=>"140277", 
                "description"=>"", 
                "quantity"=>"3", 
                "producing_year"=>"2024",
                "images"=>json_encode(["gtr1.jpg", "gtr2.jpg", "gtr3.jpg", "gtr4.jpg", "gtr5.jpg"])
            ],
            [
                // 5
                "name"=>"BMW 4-Series", 
                "manufacturer_id"=>"1", 
                "category_id"=>"10", 
                "price"=>"178624", 
                "description"=>"", 
                "quantity"=>"3", 
                "producing_year"=>"2024",
                "images"=>json_encode(["BMW1.jpg", "BMW2.jpg", "BMW3.jpg", "BMW4.jpg", "BMW5.jpg"])
            ],
            [
                // 6
                "name"=>"Chevrolet Corvette", 
                "manufacturer_id"=>"2", 
                "category_id"=>"4", 
                "price"=>"221035", 
                "description"=>"", 
                "quantity"=>"4", 
                "producing_year"=>"2024",
                "images"=>json_encode(["chevrolet1.jpg", "chevrolet2.jpg", "chevrolet3.jpg", "chevrolet4.jpg", "chevrolet5.jpg"])
            ],
            [
                // 7
                "name"=>"Dodge Hornet", 
                "manufacturer_id"=>"3", 
                "category_id"=>"5", 
                "price"=>"127845", 
                "description"=>"", 
                "quantity"=>"5", 
                "producing_year"=>"2024",
                "images"=>json_encode(["dodge1.jpg", "dodge2.jpg", "dodge3.jpg", "dodge4.jpg", "dodge5.jpg"])
            ],
            [
                // 8
                "name"=>"Ferrari Daytona SP3", 
                "manufacturer_id"=>"4", 
                "category_id"=>"10", 
                "price"=>"593181", 
                "description"=>"", 
                "quantity"=>"2", 
                "producing_year"=>"2023",
                "images"=>json_encode(["ferrari1.jpg", "ferrari2.jpg", "ferrari3.jpg", "ferrari4.jpg", "ferrari5.jpg"])
            ],
            [
                // 9
                "name"=>"Huyndai Ioniq 5", 
                "manufacturer_id"=>"6", 
                "category_id"=>"10", 
                "price"=>"133175", 
                "description"=>"", 
                "quantity"=>"4", 
                "producing_year"=>"2024",
                "images"=>json_encode(["huyndai1.jpg", "huyndai2.jpg", "huyndai3.jpg", "huyndai4.jpg", "huyndai5.jpg"])
            ],
            [
                // 10
                "name"=>"Porsche 911", 
                "manufacturer_id"=>"10", 
                "category_id"=>"10", 
                "price"=>"350336", 
                "description"=>"", 
                "quantity"=>"3", 
                "producing_year"=>"2024",
                "images"=>json_encode(["porsche1.jpg", "porsche2.jpg", "porsche3.jpg", "porsche4.jpg", "porsche5.jpg"])
            ],
            [
                // 11
                "name"=>"Toyota Highlander", 
                "manufacturer_id"=>"11", 
                "category_id"=>"8", 
                "price"=>"120620", 
                "description"=>"", 
                "quantity"=>"4", 
                "producing_year"=>"2024",
                "images"=>json_encode(["toyota1.jpg", "toyota2.jpg", "toyota3.jpg", "toyota4.jpg", "toyota5.jpg"])
            ]
        ]);
    }
}
