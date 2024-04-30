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
            ],
            // [
            //     "car_id" => "22",
            //     "length" => "200.9 in",
            //     "width" => "75.1 in",
            //     "height" => "55.9 in",
            //     "wheelbase" => "119.2 in"
            // ],
            // [
            //     "car_id" => "23",
            //     "length" => "177.2 in",
            //     "width" => "72.6 in",
            //     "height" => "64.6 in",
            //     "wheelbase" => "106.0 in"
            // ],
            // [
            //     "car_id" => "24",
            //     "length" => "195.0 in",
            //     "width" => "78.9 in",
            //     "height" => "66.9 in",
            //     "wheelbase" => "117.1 in"
            // ],
            // [
            //     "car_id" => "25",
            //     "length" => "201.2 in",
            //     "width" => "78.9 in",
            //     "height" => "69.1 in",
            //     "wheelbase" => "122.2 in"
            // ],
            // [
            //     "car_id" => "26",
            //     "length" => "199.2 in",
            //     "width" => "74.8 in",
            //     "height" => "59.6 in",
            //     "wheelbase" => "117.9 in"
            // ],
            // [
            //     "car_id" => "27",
            //     "length" => "191.9 in",
            //     "height" => "67.0 in",
            //     "width" => "76.7 in",
            //     "wheelbase" => "112.7 in"
            // ],
            // [
            //     "car_id" => "28",
            //     "length" => "188.3 in",
            //     "width" => "74.7 in",
            //     "height" => "53.1 in",
            //     "wheelbase" => "110.7 in"
            // ],
            // [
            //     "car_id" => "29",
            //     "length" => "225.7 in",
            //     "width" => "81.1 in",
            //     "height" => "75.7 in",
            //     "wheelbase" => "134.1 in"
            // ],
            // [
            //     "car_id" => "30",
            //     "length" => "173.5 in",
            //     "width" => "71.2 in",
            //     "height" => "65.2 in",
            //     "wheelbase" => "103.9 in"
            // ],
            // [
            //     //Chevrolet Trax
            //     "car_id" => "31",
            //     "length" => "178.6 in",
            //     "width" => "71.8 in",
            //     "height" => "61.4 in",
            //     "wheelbase" => "106.3 in"
            // ],
            // [
            //     "car_id" => "32",
            //     "length" => "192.6 in",
            //     "width" => "72.8 in",
            //     "height" => "58.4 in",
            //     "wheelbase" => "108.9 in"
            // ],
            // [
            //     "car_id" => "33",
            //     "length" => "197.9 in",
            //     "width" => "75.7 in",
            //     "height" => "57.7 in",
            //     "wheelbase" => "116.0 in"
            // ],
            // [
            //     "car_id" => "34",
            //     "length" => "198.4 in",
            //     "width" => "75.0 in",
            //     "height" => "57.8 in",
            //     "wheelbase" => "120.0 in"
            // ],
            // [
            //     "car_id" => "35",
            //     "length" => "192.4 in",
            //     "width" => "72.2 in",
            //     "height" => "66.6 in",
            //     "wheelbase" => "113.8 in"
            // ],
            // [
            //     "car_id" => "36",
            //     "length" => "174.4 in",
            //     "width" => "67.4 in",
            //     "height" => "56.0 in",
            //     "wheelbase" => "105.0 in"
            // ],
            // [
            //     "car_id" => "37",
            //     "length" => "183.3 inches",
            //     "width" => "77.6 inches",
            //     "height" => "51.3 inches",
            //     "wheelbase" => "105.1 inches"
            // ],
            // [
            //     "car_id" => "38",
            //     "length" => "173.7 in",
            //     "width" => "N/A",
            //     "height" => "72.9 in",
            //     "wheelbase" => "100.4 in"
            // ],
            // [
            //     "car_id" => "39",
            //     "length" => "188.8 in",
            //     "width" => "75.9 in",
            //     "height" => "68.3 in",
            //     "wheelbase" => "112.2 in"
            // ],
            // [
            //     "car_id" => "40",
            //     "length" => "185.6 in",
            //     "width" => "74.1 in",
            //     "height" => "64.0 in",
            //     "wheelbase" => "117.5 in"
            // ],
            // [
            //     "car_id" => "41",
            //     "length" => "195.7 in",
            //     "width" => "75.0 in",
            //     "height" => "66.7 in",
            //     "wheelbase" => "118.3 in"
            // ],
            // [
            //     "car_id" => "42",
            //     "length" => "192.9 in",
            //     "width" => "73.2 in",
            //     "height" => "56.9 in",
            //     "wheelbase" => "111.8 in"
            // ],
            // [
            //     "car_id" => "43",
            //     "length" => "182.3 in",
            //     "width" => "73.4 in",
            //     "height" => "57.9 in",
            //     "wheelbase" => "108.5 in"
            // ],
            // [
            //     "car_id" => "44",
            //     "length" => "159.1 in",
            //     "width" => "69.7 in",
            //     "height" => "61.6 in",
            //     "wheelbase" => "99.2 in"
            // ],
            // [
            //     "car_id" => "45",
            //     "length" => "196.7 in",
            //     "width" => "77.8 in",
            //     "height" => "68.9 in",
            //     "wheelbase" => "114.2 in"
            // ],
            // [
            //     "car_id" => "46",
            //     "length" => "178.3 in",
            //     "width" => "76.0 in",
            //     "height" => "47.3 in",
            //     "wheelbase" => "105.1 in"
            // ],
            // [
            //     "car_id" => "47",
            //     "length" => "181.3 in",
            //     "width" => "76.9 in",
            //     "height" => "47.0 in",
            //     "wheelbase" => "105.1 in"
            // ],
            // [
            //     "car_id" => "48",
            //     "length" => "180.0 in",
            //     "width" => "85.0 in",
            //     "height" => "47.0 in",
            //     "wheelbase" => "105.1 in"
            // ],
            // [
            //     "car_id" => "49",
            //     "length" => "178.7 in",
            //     "width" => "81.0 in",
            //     "height" => "47.0 in",
            //     "wheelbase" => "103.9 in"
            // ],
            // [
            //     "car_id" => "50",
            //     "length" => "184.4 in",
            //     "width" => "86.0 in",
            //     "height" => "47.8 in",
            //     "wheelbase" => "105.3 in"
            // ],
            // [
            //     "car_id" => "51",
            //     "length" => "194.3 in",
            //     "width" => "73.7 in",
            //     "height" => "57.8 in",
            //     "wheelbase" => "115.7 in"
            // ],
            // [
            //     "car_id" => "52",
            //     "length" => "192.1 in",
            //     "width" => "73.0 in",
            //     "height" => "57.1 in",
            //     "wheelbase" => "113.2 in"
            // ],
            // [
            //     "car_id" => "53",
            //     "length" => "184.4 in",
            //     "width" => "86.0 in",
            //     "height" => "65.6 in",
            //     "wheelbase" => "111.3 in"
            // ],
            // [
            //     "car_id" => "54",
            //     "length" => "195.3 in",
            //     "width" => "86.0 in",
            //     "height" => "67.7 in",
            //     "wheelbase" => "115.6 in"
            // ],
            // [
            //     "car_id" => "55",
            //     "length" => "203.0 in",
            //     "width" => "90.0 in",
            //     "height" => "65.4 in",
            //     "wheelbase" => "126.6 in"
            // ],
            // [
            //     "car_id" => "56",
            //     "length" => "182.7 in",
            //     "width" => "76.3 in",
            //     "height" => "49.7 in",
            //     "wheelbase" => "105.5 in"
            // ],
            // [
            //     "car_id" => "57",
            //     "length" => "192.9 in",
            //     "width" => "72.9 in",
            //     "height" => "56.7 in",
            //     "wheelbase" => "111.2 in"
            // ],
            // [
            //     "car_id" => "58",
            //     "length" => "192.8 in",
            //     "width" => "73.2 in",
            //     "height" => "56.5 in",
            //     "wheelbase" => "109.3 in"
            // ],
            // [
            //     "car_id" => "59",
            //     "length" => "177.0 in",
            //     "width" => "68.5 in",
            //     "height" => "57.3 in",
            //     "wheelbase" => "103.1 in"
            // ],
            // [
            //     "car_id" => "60",
            //     "length" => "172.4 in",
            //     "width" => "70.9 in",
            //     "height" => "50.4 in",
            //     "wheelbase" => "97.4 in"
            // ],
            // [
            //     "car_id" => "61",
            //     "length" => "181.6 in",
            //     "width" => "75.6 in",
            //     "height" => "45.9 in",
            //     "wheelbase" => "107.5 in"
            // ],
            // [
            //     "car_id" => "62",
            //     "length" => "191.1 in",
            //     "width" => "78.7 in",
            //     "height" => "67.4 in",
            //     "wheelbase" => "114.0 in"
            // ],
            // [
            //     "car_id" => "63",
            //     "length" => "198.8 in",
            //     "width" => "76.3 in",
            //     "height" => "56.0 in",
            //     "wheelbase" => "116.1 in"
            // ],
            // [
            //     "car_id" => "64",
            //     "length" => "195.4 in",
            //     "width" => "N/A",
            //     "height" => "54.9 in",
            //     "wheelbase" => "114.2 in"
            // ],
            // [
            //     "car_id" => "65",
            //     "length" => "192.1 in",
            //     "width" => "72.4 in",
            //     "height" => "56.9 in",
            //     "wheelbase" => "111.2 in"
            // ],
            // [
            //     "car_id" => "66",
            //     "length" => "196.1 in",
            //     "width" => "72.4 in",
            //     "height" => "60.6 in",
            //     "wheelbase" => "112.2 in"
            // ],
            // [
            //     "car_id" => "67",
            //     "length" => "195.8 in",
            //     "width" => "74.2 in",
            //     "height" => "57.9 in",
            //     "wheelbase" => "114.9 in"
            // ],
            // [
            //     "car_id" => "68",
            //     "length" => "180.9 in",
            //     "width" => "73.0 in",
            //     "height" => "67.0 in",
            //     "wheelbase" => "105.9 in"
            // ],
            // [
            //     "car_id" => "69",
            //     "length" => "172.5 in",
            //     "width" => "73.0 in",
            //     "height" => "51.1 in",
            //     "wheelbase" => "97.2 in"
            // ],
        ]);
    }
}
