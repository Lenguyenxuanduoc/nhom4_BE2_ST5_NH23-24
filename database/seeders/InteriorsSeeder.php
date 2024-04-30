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
            ],
            [
                "car_id" => "22",
                "front_headroom" => "40.6 in",
                "rear_headroom" => "37.1 in",
                "front_legroom" => "42.1 in",
                "rear_legroom" => "36.6 in",
                "front_shoulder_room" => "57.2 in",
                "rear_shoulder_room" => "54.6 in"
            ],
            [
                "car_id" => "23",
                "front_headroom" => "41.9 in",
                "front_legroom" => "40.4 in",
                "rear_headroom" => "39.4 in",
                "front_shoulder_room" => "55.6 in",
                "rear_legroom" => "37.0 in",
                "rear_shoulder_room" => "55.2 in"
            ],
            [
                "car_id" => "24",
                "front_headroom" => "39.3 in",
                "rear_headroom" => "37.5 in",
                "front_legroom" => "40.4 in",
                "rear_legroom" => "35.7 in",
                "front_shoulder_room" => "60.0 in",
                "rear_shoulder_room" => "57.7 in"
            ],
            [
                "car_id" => "25",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                "car_id" => "26",
                "front_headroom" => "40.7 in",
                "rear_headroom" => "39.1 in",
                "front_legroom" => "41.3 in",
                "rear_legroom" => "36.5 in",
                "front_shoulder_room" => "59.2 in",
                "rear_shoulder_room" => "56.9 in"
            ],
            [
                "car_id" => "27",
                "front_headroom" => "39.8 in",
                "rear_headroom" => "38.6 in",
                "front_legroom" => "41.0 in",
                "rear_legroom" => "39.6 in",
                "front_shoulder_room" => "59.1 in",
                "rear_shoulder_room" => "58.6 in"
            ],
            [
                "car_id" => "28",
                "front_headroom" => "38.5 in",
                "rear_headroom" => "33.5 in",
                "front_legroom" => "43.9 in",
                "rear_legroom" => "29.9 in",
                "front_shoulder_room" => "55.0 in",
                "rear_shoulder_room" => ""
            ],
            [
                "car_id" => "29",
                "front_headroom" => "42.3 in",
                "rear_headroom" => "38.9 in",
                "front_legroom" => "44.5 in",
                "rear_legroom" => "42.0 in",
                "front_shoulder_room" => "66.0 in",
                "rear_shoulder_room" => "64.8 in"
            ],
            [
                "car_id" => "30",
                "front_headroom" => "40.0 in",
                "rear_headroom" => "38.4 in",
                "front_legroom" => "40.9 in",
                "rear_legroom" => "39.4 in",
                "front_shoulder_room" => "55.4 in",
                "rear_shoulder_room" => "53.8 in"
            ],
            [
                "car_id" => "31",
                "front_headroom" => "39.6 in",
                "rear_headroom" => "38.1 in",
                "front_legroom" => "41.9 in",
                "rear_legroom" => "38.7 in",
                "front_shoulder_room" => "55.7 in",
                "rear_shoulder_room" => "54.3 in"
            ],
            [
                "car_id" => "32",
                "front_headroom" => "40.0 in",
                "rear_headroom" => "38.3 in",
                "front_legroom" => "42.4 in",
                "rear_legroom" => "36.2 in",
                "front_shoulder_room" => "56.3 in",
                "rear_shoulder_room" => "56.0 in"
            ],
            [
                "car_id" => "33",
                "front_headroom" => "39.3 in",
                "rear_headroom" => "37.1 in",
                "front_legroom" => "42.0 in",
                "rear_legroom" => "33.1 in",
                "front_shoulder_room" => "58.5 in",
                "rear_shoulder_room" => "53.9 in"
            ],
            [
                "car_id" => "34",
                "front_headroom" => "38.6 in",
                "rear_headroom" => "36.6 in",
                "front_legroom" => "41.8 in",
                "rear_legroom" => "40.1 in",
                "front_shoulder_room" => "59.5 in",
                "rear_shoulder_room" => "57.9 in"
            ],
            [
                "car_id" => "35",
                "front_headroom" => "40.8 in",
                "rear_headroom" => "39.2 in",
                "front_legroom" => "40.8 in",
                "rear_legroom" => "36.1 in",
                "front_shoulder_room" => "57.5 in",
                "rear_shoulder_room" => "56.9 in"
            ],
            [
                "car_id" => "36",
                "front_headroom" => "38.4 in",
                "rear_headroom" => "36.7 in",
                "front_legroom" => "42.2 in",
                "rear_legroom" => "34.8 in",
                "front_shoulder_room" => "53.4 in",
                "rear_shoulder_room" => "52.8 in"
            ],
            [
                "car_id" => "37",
                "front_headroom" => "38.0 inches",
                "rear_headroom" => "35.0 inches",
                "front_legroom" => "42.0 inches",
                "rear_legroom" => "32.0 inches",
                "front_shoulder_room" => "56.0 inches",
                "rear_shoulder_room" => "52.0 inches"
            ],
            [
                "car_id" => "38",
                "front_headroom" => "41.0 in",
                "rear_headroom" => "39.8 in",
                "front_legroom" => "43.1 in",
                "rear_legroom" => "35.7 in",
                "front_shoulder_room" => "57.1 in",
                "rear_shoulder_room" => "51.8 in"
            ],
            [
                "car_id" => "39",
                "front_headroom" => "40.2 in",
                "rear_headroom" => "40.3 in",
                "front_legroom" => "42.6 in",
                "rear_legroom" => "40.6 in",
                "front_shoulder_room" => "60.3 in",
                "rear_shoulder_room" => "60.5 in"
            ],
            [
                "car_id" => "40",
                "front_headroom" => "38.9 in",
                "rear_headroom" => "38.2 in",
                "front_legroom" => "43.3 in",
                "rear_legroom" => "38.1 in",
                "front_shoulder_room" => "57.6 in",
                "rear_shoulder_room" => "55.9 in"
            ],
            [
                "car_id" => "41",
                "front_headroom" => "40.7 in",
                "rear_headroom" => "40.1 in",
                "front_legroom" => "41.4 in",
                "rear_legroom" => "36.5 in",
                "front_shoulder_room" => "57.6 in",
                "rear_shoulder_room" => "56.1 in"
            ],
            [
                "car_id" => "42",
                "front_headroom" => "40.0 in",
                "rear_headroom" => "37.8 in",
                "front_legroom" => "46.1 in",
                "rear_legroom" => "34.8 in",
                "front_shoulder_room" => "57.9 in",
                "rear_shoulder_room" => "56.1 in"
            ],
            [
                "car_id" => "43",
                "front_headroom" => "40.1 in",
                "rear_headroom" => "39.5 in",
                "front_legroom" => "41.4 in",
                "rear_legroom" => "41.3 in",
                "front_shoulder_room" => "57.6 in",
                "rear_shoulder_room" => "56.0 in"
            ],
            [
                "car_id" => "44",
                "front_headroom" => "39.4 in",
                "rear_headroom" => "38.6 in",
                "front_legroom" => "41.3 in",
                "rear_legroom" => "34.3 in",
                "front_shoulder_room" => "53.9 in",
                "rear_shoulder_room" => "53.7 in"
            ],
            [
                "car_id" => "45",
                "front_headroom" => "40.7 in",
                "rear_headroom" => "40.1 in",
                "front_legroom" => "44.1 in",
                "rear_legroom" => "42.4 in",
                "front_shoulder_room" => "61.2 in",
                "rear_shoulder_room" => "60.8 in"
            ],
            [
                "car_id" => "46",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                "car_id" => "47",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                "car_id" => "48",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                "car_id" => "49",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                "car_id" => "50",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                "car_id" => "51",
                "front_headroom" => "37.9 in",
                "rear_headroom" => "38.2 in",
                "front_legroom" => "41.3 in",
                "rear_legroom" => "35.8 in",
                "front_shoulder_room" => "57.8 in",
                "rear_shoulder_room" => "56.9 in"
            ],
            [
                "car_id" => "52",
                "front_headroom" => "37.9 in",
                "rear_headroom" => "38.2 in",
                "front_legroom" => "41.3 in",
                "rear_legroom" => "35.8 in",
                "front_shoulder_room" => "57.8 in",
                "rear_shoulder_room" => "56.9 in"
            ],
            [
                "car_id" => "53",
                "front_headroom" => "42.1 in",
                "rear_headroom" => "38.5 in",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "55.9 in",
                "rear_shoulder_room" => "54.9 in"
            ],
            [
                "car_id" => "54",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                "car_id" => "55",
                "front_headroom" => "39.8 in",
                "rear_headroom" => "37.2 in",
                "front_legroom" => "39.8 in",
                "rear_legroom" => "32.4 in",
                "front_shoulder_room" => "60.3 in",
                "rear_shoulder_room" => "52.8 in"
            ],
            [
                "car_id" => "56",
                "front_headroom" => "41.7 in",
                "rear_headroom" => "",
                "front_legroom" => "39.1 in",
                "rear_legroom" => "",
                "front_shoulder_room" => "58.4 in",
                "rear_shoulder_room" => ""
            ],
            [
                "car_id" => "57",
                "front_headroom" => "39.1 in",
                "rear_headroom" => "36.9 in",
                "front_legroom" => "43.8 in",
                "rear_legroom" => "35.2 in",
                "front_shoulder_room" => "58.2 in",
                "rear_shoulder_room" => "57.1 in"
            ],
            [
                "car_id" => "58",
                "front_headroom" => "39.4 in",
                "rear_headroom" => "36.7 in",
                "front_legroom" => "45.0 in",
                "rear_legroom" => "34.2 in",
                "front_shoulder_room" => "56.7 in",
                "rear_shoulder_room" => "55.7 in"
            ],
            [
                "car_id" => "59",
                "front_headroom" => "39.5 in",
                "rear_headroom" => "36.3 in",
                "front_legroom" => "44.5 in",
                "rear_legroom" => "31.0 in",
                "front_shoulder_room" => "53.1 in",
                "rear_shoulder_room" => "53.6 in"
            ],
            [
                "car_id" => "60",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                "car_id" => "61",
                "front_headroom" => "38.0 in",
                "rear_headroom" => "",
                "front_legroom" => "41.6 in",
                "rear_legroom" => "",
                "front_shoulder_room" => "51.7 in",
                "rear_shoulder_room" => ""
            ],
            [
                "car_id" => "62",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                "car_id" => "63",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                "car_id" => "64",
                "front_headroom" => "",
                "rear_headroom" => "",
                "front_legroom" => "",
                "rear_legroom" => "",
                "front_shoulder_room" => "",
                "rear_shoulder_room" => ""
            ],
            [
                "car_id" => "65",
                "front_headroom" => "38.3 in",
                "rear_headroom" => "38.0 in",
                "front_legroom" => "42.1 in",
                "rear_legroom" => "38.0 in",
                "front_shoulder_room" => "57.7 in",
                "rear_shoulder_room" => "55.7 in"
            ],
            [
                "car_id" => "66",
                "front_headroom" => "38.2 in",
                "rear_headroom" => "37.5 in",
                "front_legroom" => "42.1 in",
                "rear_legroom" => "38.9 in",
                "front_shoulder_room" => "57.1 in",
                "rear_shoulder_room" => "55.1 in"
            ],
            [
                "car_id" => "67",
                "front_headroom" => "38.4 in",
                "rear_headroom" => "36.7 in",
                "front_legroom" => "42.2 in",
                "rear_legroom" => "33.1 in",
                "front_shoulder_room" => "58.4 in",
                "rear_shoulder_room" => "54.4 in"
            ],
            [
                "car_id" => "68",
                "front_headroom" => "37.7 in",
                "rear_headroom" => "39.5 in",
                "front_legroom" => "41.0 in",
                "rear_legroom" => "37.8 in",
                "front_shoulder_room" => "57.8 in",
                "rear_shoulder_room" => "56.4 in"
            ],
            [
                "car_id" => "69",
                "front_headroom" => "38.3 in",
                "rear_headroom" => "",
                "front_legroom" => "42.2 in",
                "rear_legroom" => "",
                "front_shoulder_room" => "54.4 in",
                "rear_shoulder_room" => ""
            ],
        ]);
    }
}
