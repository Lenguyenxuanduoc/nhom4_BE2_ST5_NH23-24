<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeightsCapacitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("weights_capacities") -> insert([
            [
                 //Ford Mustang
                "car_id" => "1",
                "fuel_capacity" => "16.0",
                "cargo_capacity" => "13.3 cu-ft",
                "curb_weight" => "3,579 lb"
            ],
            [
                //Lamborghini Huracan
                "car_id" => "2",
                "fuel_capacity" => "21.1",
                "cargo_capacity" => "",
                "curb_weight" => "3,062 lb"
            ],
            [
                //McLaren 720S
                "car_id" => "3",
                "fuel_capacity" => "19.0",
                "cargo_capacity" => "7.4 cu-ft",
                "curb_weight" => "3,139 lb"
            ],
            [
                //Nissan GT-R
                "car_id" => "4",
                "fuel_capacity" => "19.5",
                "cargo_capacity" => "8.8 cu-ft",
                "curb_weight" => "3,935 lb"
            ],
            [
                //BMW
                "car_id" => "5",
                "fuel_capacity" => "15.6",
                "cargo_capacity" => "16.6/45.6 cu-ft",
                "curb_weight" => "3,792 lb"
            ],
            [
                //Chevrolet
                "car_id" => "6",
                "fuel_capacity" => "18.5",
                "cargo_capacity" => "12.6 cu-ft",
                "curb_weight" => "3,366 lb"
            ],
            [
                //Dodge
                "car_id" => "7",
                "fuel_capacity" => "13.5",
                "cargo_capacity" => "27.0/54.7 cu-ft",
                "curb_weight" => "3,715 lb"
            ],
            [
                //Ferrari
                "car_id" => "8",
                "fuel_capacity" => "22.7",
                "cargo_capacity" => "",
                "curb_weight" => "3,274 lb"
            ],
            [
                //Huyndai
                "car_id" => "9",
                "fuel_capacity" => "",
                "cargo_capacity" => "27.2/59.3 cu-ft",
                "curb_weight" => "3,968 lb"
            ],
            [
                //Porsche
                "car_id" => "10",
                "fuel_capacity" => "16.9",
                "cargo_capacity" => "",
                "curb_weight" => "3,354 lb"
            ],
            [
                //Toyota
                "car_id" => "11",
                "fuel_capacity" => "14.5",
                "cargo_capacity" => "37.6/69.8 cu-ft",
                "curb_weight" => "3,690 lb"
            ],
            [
                //Ferrari 296 GTB
                "car_id" => "12",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => ""
            ],
            [
                //Ferrari F8
                "car_id" => "13",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => ""
            ],
            [
                //Ferrari SF90
                "car_id" => "14",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => ""
            ],
            [
                //Ferrari SF90 Stradale
                "car_id" => "15",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => ""
            ],
            [
                //Ford F-150
                "car_id" => "16",
                "fuel_capacity" => "23.0",
                "cargo_capacity" => "",
                "curb_weight" => ""
            ],
            [
                //Ford Mustang GTD
                "car_id" => "17",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => ""
            ],
            [
                //Lamborghini Huracan
                "car_id" => "18",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => ""
            ],
            [
                //Lamborghini Revuelto
                "car_id" => "19",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => ""
            ],
            [
                //Nissan Ariya
                "car_id" => "20",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => ""
            ],
            [
                //Nissan Z
                "car_id" => "21",
                "fuel_capacity" => "16.4",
                "cargo_capacity" => "6.9 cu-ft",
                "curb_weight" => "3,486 lb"
            ]
        ]);
    }
}
