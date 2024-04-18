<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InteriorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("interiors")->insert([
            [
                //Ford Mustang
                "car_id" => "1",
                "front_headroom" => "37.6 in",
                "rear_headroom" => "34.8 in",
                "front_legroom" => "44.5 in",
                "rear_legroom" => "29.0 in",
                "front_shoulder_room" => "56.3 in",
                "rear_shoulder_room" => "52.2 in"
            ],
            [
                //Lamborghini Huracan
                "car_id" => "2",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                //McLaren 720S
                "car_id" => "3",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                //Nissan GT-R
                "car_id" => "4",
                "front_headroom" => "38.1 in",
                "rear_headroom" => "33.5 in",
                "front_legroom" => "44.6 in",
                "rear_legroom" => "26.4 in",
                "front_shoulder_room" => "54.3 in",
                "rear_shoulder_room" => "50.0 in"
            ],
            [
                //BMW
                "car_id" => "5",
                "front_headroom" => "38.6 in",
                "rear_headroom" => "36.6 in",
                "front_legroom" => "41.9 in",
                "rear_legroom" => "34.9 in",
                "front_shoulder_room" => "55.2 in",
                "rear_shoulder_room" => "54.3 in"
            ],
            [
                //Chevrolet
                "car_id" => "6",
                "front_headroom" => "37.9 in",
                "rear_headroom" => "",
                "front_legroom" => "42.8 in",
                "rear_legroom" => "",
                "front_shoulder_room" => "54.4 in",
                "rear_shoulder_room" => ""
            ],
            [
                //Dodge
                "car_id" => "7",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                //Ferrari
                "car_id" => "8",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                //Huyndai
                "car_id" => "9",
                "front_headroom" => "39.8 in",
                "rear_headroom" => "38.7 in",
                "front_legroom" => "41.7 in",
                "rear_legroom" => "39.4 in",
                "front_shoulder_room" => "57.7 in",
                "rear_shoulder_room" => "57.7 in"
            ],
            [
                //Porsche
                "car_id" => "10",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                //Toyota
                "car_id" => "11",
                "front_headroom" => "37.7 in",
                "rear_headroom" => "39.5 in",
                "front_legroom" => "41.0 in",
                "rear_legroom" => "37.8 in",
                "front_shoulder_room" => "57.8 in",
                "rear_shoulder_room" => "56.4 in"
            ],
            [
                //Ferrari 296 GTB
                "car_id" => "12",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                //Ferrari F8
                "car_id" => "13",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                //Ferrari SF90
                "car_id" => "14",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                //Ferrari SF90 Stradale
                "car_id" => "15",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                //Ford F-150
                "car_id" => "16",
                "front_headroom" => "40.8 in",
                "rear_headroom" => "",
                "front_legroom" => "43.9 in",
                "rear_legroom" => "",
                "front_shoulder_room" => "66.7 in",
                "rear_shoulder_room" => ""
            ],
            [
                //Ford Mustang GTD
                "car_id" => "17",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                //Lamborghini Huracan
                "car_id" => "18",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                //Lamborghini Revuelto
                "car_id" => "19",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                //Nissan Ariya
                "car_id" => "20",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                //Nissan Z
                "car_id" => "21",
                "front_headroom" => "38.2 in",
                "rear_headroom" => "",
                "front_legroom" => "42.9 in",
                "rear_legroom" => "",
                "front_shoulder_room" => "54.2 in",
                "rear_shoulder_room" => ""
            ]
        ]);
    }
}
