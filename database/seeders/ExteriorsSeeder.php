<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExteriorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("exteriors")->insert([
            [
                //Ford Mustang
                "car_id" => "1",
                "length" => "189.4 in",
                "width" => "75.4 in",
                "height" => "55.0 in",
                "wheelbase" => "107.0 in"
            ],
            [
                //Lamborghini Huracan
                "car_id" => "2",
                "length" => "178.0 in",
                "width" => "76.1 in",
                "height" => "45.9 in",
                "wheelbase" => "103.1 in"
            ],
            [
                //McLaren 720S
                "car_id" => "3",
                "length" => "180.0 in",
                "width" => "85.0 in",
                "height" => "47.0 in",
                "wheelbase" => "105.1 in"
            ],
            [
                //Nissan GT-R
                "car_id" => "4",
                "length" => "185.4 in",
                "width" => "74.6 in",
                "height" => "53.9 in",
                "wheelbase" => "109.4 in"
            ],
            [
                //BMW
                "car_id" => "5",
                "length" => "188.5 in",
                "width" => "72.9 in",
                "height" => "56.8 in",
                "wheelbase" => "112.4 in"
            ],
            [
                //Chevrolet
                "car_id" => "6",
                "length" => "184.6 in",
                "width" => "79.7 in",
                "height" => "48.6 in",
                "wheelbase" => "107.2 in"
            ],
            [
                //Dodge
                "car_id" => "7",
                "length" => "178.0 in",
                "width" => "72.5 in",
                "height" => "63.8 in",
                "wheelbase" => "103.8 in"
            ],
            [
                //Ferrari
                "car_id" => "8",
                "length" => "184.5 in",
                "width" => "80.7 in",
                "height" => "45.0 in",
                "wheelbase" => "104.4 in"
            ],
            [
                //Huyndai
                "car_id" => "9",
                "length" => "182.5 in",
                "width" => "74.4 in",
                "height" => "63.0 in",
                "wheelbase" => "118.1 in"
            ],
            [
                //Porsche
                "car_id" => "10",
                "length" => "177.9 in",
                "width" => "79.7 in",
                "height" => "51.1 in",
                "wheelbase" => "96.5 in"
            ],
            [
                //Toyota
                "car_id" => "11",
                "length" => "180.9 in",
                "width" => "73.0 in",
                "height" => "67.0 in",
                "wheelbase" => "105.9 in"
            ],
            [
                //Ferrari 296 GTB
                "car_id" => "12",
                "length" => "",
                "width" => "",
                "height" => "",
                "wheelbase" => ""
            ],
            [
                //Ferrari F8
                "car_id" => "13",
                "length" => "",
                "width" => "",
                "height" => "",
                "wheelbase" => ""
            ],
            [
                //Ferrari SF90
                "car_id" => "14",
                "length" => "",
                "width" => "",
                "height" => "",
                "wheelbase" => ""
            ],
            [
                //Ferrari SF90 Stradale
                "car_id" => "15",
                "length" => "",
                "width" => "",
                "height" => "",
                "wheelbase" => ""
            ],
            [
                //Ford F-150
                "car_id" => "16",
                "length" => "209.1 in",
                "width" => "79.9 in",
                "height" => "75.6 in",
                "wheelbase" => "122.8 in"
            ],
            [
                //Ford Mustang GTD
                "car_id" => "17",
                "length" => "",
                "width" => "",
                "height" => "",
                "wheelbase" => ""
            ],
            [
                //Lamborghini Huracan
                "car_id" => "18",
                "length" => "",
                "width" => "",
                "height" => "",
                "wheelbase" => ""
            ],
            [
                //Lamborghini Revuelto
                "car_id" => "19",
                "length" => "",
                "width" => "",
                "height" => "",
                "wheelbase" => ""
            ],
            [
                //Nissan Ariya
                "car_id" => "20",
                "length" => "",
                "width" => "",
                "height" => "",
                "wheelbase" => ""
            ],
            [
                //Nissan Z
                "car_id" => "21",
                "length" => "172.4 in",
                "width" => "72.6 in",
                "height" => "51.8 in",
                "wheelbase" => "100.4 in"
            ]
        ]);
    }
}
