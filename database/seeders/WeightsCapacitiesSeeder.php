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
                "curb_weight" => "3,579 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

            ],
            [
                //Lamborghini Huracan
                "car_id" => "2",
                "fuel_capacity" => "21.1",
                "cargo_capacity" => "",
                "curb_weight" => "3,062 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

                
            ],
            [
                //McLaren 720S
                "car_id" => "3",
                "fuel_capacity" => "19.0",
                "cargo_capacity" => "7.4 cu-ft",
                "curb_weight" => "3,139 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

            ],
            [
                //Nissan GT-R
                "car_id" => "4",
                "fuel_capacity" => "19.5",
                "cargo_capacity" => "8.8 cu-ft",
                "curb_weight" => "3,935 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

            ],
            [
                //BMW
                "car_id" => "5",
                "fuel_capacity" => "15.6",
                "cargo_capacity" => "16.6/45.6 cu-ft",
                "curb_weight" => "3,792 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

            ],
            [
                //Chevrolet
                "car_id" => "6",
                "fuel_capacity" => "18.5",
                "cargo_capacity" => "12.6 cu-ft",
                "curb_weight" => "3,366 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

            ],
            [
                //Dodge
                "car_id" => "7",
                "fuel_capacity" => "13.5",
                "cargo_capacity" => "27.0/54.7 cu-ft",
                "curb_weight" => "3,715 lb",
                "towing_capacity" => "2,000 lb",
                "GVWR" => "4,960 lb",
                "payload_capacity" => "1,245 lb",
                "tonnage" => ""

            ],
            [
                //Ferrari
                "car_id" => "8",
                "fuel_capacity" => "22.7",
                "cargo_capacity" => "",
                "curb_weight" => "3,274 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                //Huyndai
                "car_id" => "9",
                "fuel_capacity" => "",
                "cargo_capacity" => "27.2/59.3 cu-ft",
                "curb_weight" => "3,968 lb",
                "towing_capacity" => "",
                "GVWR" => "5,124 lb",
                "payload_capacity" => "1,246 lb",
                "tonnage" => ""
            ],
            [
                //Porsche
                "car_id" => "10",
                "fuel_capacity" => "16.9",
                "cargo_capacity" => "",
                "curb_weight" => "3,354 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                //Toyota
                "car_id" => "11",
                "fuel_capacity" => "14.5",
                "cargo_capacity" => "37.6/69.8 cu-ft",
                "curb_weight" => "3,690 lb",
                "towing_capacity" => "1,000 / 3,500 lb",
                "GVWR" => "5,960 lb",
                "payload_capacity" => "1,630 lb",
                "tonnage" => ""
            ],
            [
                //Ferrari 296 GTB
                "car_id" => "12",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => "",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                //Ferrari F8
                "car_id" => "13",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => "",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                //Ferrari SF90
                "car_id" => "14",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => "",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                //Ferrari SF90 Stradale
                "car_id" => "15",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => "",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                //Ford F-150
                "car_id" => "16",
                "fuel_capacity" => "23.0",
                "cargo_capacity" => "",
                "curb_weight" => "",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => "1/2 Ton"
            ],
            [
                //Ford Mustang GTD
                "car_id" => "17",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => "",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                //Lamborghini Huracan
                "car_id" => "18",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => "",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                //Lamborghini Revuelto
                "car_id" => "19",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => "",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                //Nissan Ariya
                "car_id" => "20",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => "",
                "towing_capacity" => "",
                "GVWR" => "5,313 lb",
                "payload_capacity" => "900 lb",
                "tonnage" => ""
            ],
            [
                //Nissan Z
                "car_id" => "21",
                "fuel_capacity" => "16.4",
                "cargo_capacity" => "6.9 cu-ft",
                "curb_weight" => "3,486 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "22",
                "fuel_capacity" => "20.1",
                "cargo_capacity" => "11.0 cu-ft",
                "curb_weight" => "4,480 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "23",
                "fuel_capacity" => "14.3",
                "cargo_capacity" => "25.7/57.2 cu-ft",
                "curb_weight" => "3,750 lb",
                "towing_capacity" => "1,653 lb",
                "GVWR" => "4,850 lb",
                "payload_capacity" => "1,100 lb",
                "tonnage" => ""
            ],
            [
                "car_id" => "24",
                "fuel_capacity" => "21.9",
                "cargo_capacity" => "27.4/59.6 cu-ft",
                "curb_weight" => "5,002 lb",
                "towing_capacity" => "",
                "GVWR" => "6,360 lb",
                "payload_capacity" => "1,082 lb",
                "tonnage" => ""
            ],
            [
                "car_id" => "25",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => "6,062 lb",
                "towing_capacity" => "",
                "GVWR" => "7,209 lb",
                "payload_capacity" => "1,147 lb",
                "tonnage" => ""
            ],
            [
                "car_id" => "26",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => "4,916 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "27",
                "fuel_capacity" => "19.4",
                "cargo_capacity" => "30.5/64.2 cu-ft",
                "curb_weight" => "3,918 lb",
                "towing_capacity" => "4,500 lb",
                "GVWR" => "6,001 lb",
                "payload_capacity" => "2,083 lb",
                "tonnage" => ""
            ],
            [
                "car_id" => "28",
                "fuel_capacity" => "19.0",
                "cargo_capacity" => "9.1 cu-ft",
                "curb_weight" => "3,351 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "29",
                "fuel_capacity" => "28.0",
                "cargo_capacity" => "41.5/144.7 cu-ft",
                "curb_weight" => "5,616 lb",
                "towing_capacity" => "",
                "GVWR" => "7,500 lb",
                "payload_capacity" => "1,884 lb",
                "tonnage" => ""
            ],
            [
                "car_id" => "30",
                "fuel_capacity" => "13.2",
                "cargo_capacity" => "25.3/54.4 cu-ft",
                "curb_weight" => "3,029 lb",
                "towing_capacity" => "1,000 lb",
                "GVWR" => "4,189 lb",
                "payload_capacity" => "1,160/1,226 lb",
                "tonnage" => ""
            ],
            [
                "car_id" => "31",
                "fuel_capacity" => "N/R",
                "cargo_capacity" => "25.6/54.1 cu-ft",
                "curb_weight" => "3,124 lb",
                "towing_capacity" => "4,500 lb",
                "GVWR" => "4,001 lb",
                "payload_capacity" => "2,083 lb",
                "tonnage" => ""
            ],
            [
                "car_id" => "32",
                "fuel_capacity" => "16.9",
                "cargo_capacity" => "13.5/13.5 cu-ft",
                "curb_weight" => "3,400 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "33",
                "fuel_capacity" => "18.5",
                "cargo_capacity" => "16.2 cu-ft",
                "curb_weight" => "3,841 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "34",
                "fuel_capacity" => "18.5",
                "cargo_capacity" => "16.5 cu-ft",
                "curb_weight" => "3,940 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "35",
                "fuel_capacity" => "20.5",
                "cargo_capacity" => "10.7/67.6 cu-ft",
                "curb_weight" => "3,818 lb",
                "towing_capacity" => "1,000/2,500 lb",
                "GVWR" => "5,500 lb",
                "payload_capacity" => "1,187 lb",
                "tonnage" => ""
            ],
            [
                "car_id" => "36",
                "fuel_capacity" => "12.5",
                "cargo_capacity" => "13.1 cu-ft",
                "curb_weight" => "2,581 lb",
                "towing_capacity" => "1,500 lb",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "37",
                "fuel_capacity" => "20.0 gallons",
                "cargo_capacity" => "9.0 cu-ft",
                "curb_weight" => "3,461 lbs",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "38",
                "fuel_capacity" => "16.9",
                "cargo_capacity" => "99.0 cu-ft",
                "curb_weight" => "4,319 lb",
                "towing_capacity" => "2,000 lb",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "39",
                "fuel_capacity" => "18.5",
                "cargo_capacity" => "39.2/73.4 cu-ft",
                "curb_weight" => "4,122 lb",
                "towing_capacity" => "3,500 lb",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "40",
                "fuel_capacity" => "N/R",
                "cargo_capacity" => "29.7/59.7 cu-ft",
                "curb_weight" => "4,318 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "41",
                "fuel_capacity" => "17.7",
                "cargo_capacity" => "N/A",
                "curb_weight" => "3,708 lb",
                "towing_capacity" => "1,650/3,500 lb",
                "GVWR" => "5,456 lb",
                "payload_capacity" => "1,478 lb",
                "tonnage" => ""
            ],
            [
                "car_id" => "42",
                "fuel_capacity" => "13.2",
                "cargo_capacity" => "16.0 cu-ft",
                "curb_weight" => "3,325 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "43",
                "fuel_capacity" => "14.3",
                "cargo_capacity" => "38.7/74.8 cu-ft",
                "curb_weight" => "3,341 lb",
                "towing_capacity" => "1,650/2,000 lb",
                "GVWR" => "4,629 lb",
                "payload_capacity" => "1,283 lb",
                "tonnage" => ""
            ],
            [
                "car_id" => "44",
                "fuel_capacity" => "11.9",
                "cargo_capacity" => "18.7/31.9 cu-ft",
                "curb_weight" => "2,612 lb",
                "towing_capacity" => "",
                "GVWR" => "3,770 lb",
                "payload_capacity" => "1,158 lb",
                "tonnage" => ""
            ],
            [
                "car_id" => "45",
                "fuel_capacity" => "18.8",
                "cargo_capacity" => "18.0/86.4 cu-ft",
                "curb_weight" => "4,171 lb",
                "towing_capacity" => "1,650/5,000 lb",
                "GVWR" => "5,732 lb",
                "payload_capacity" => "1,561 lb",
                "tonnage" => ""
            ],
            [
                "car_id" => "46",
                "fuel_capacity" => "19.0",
                "cargo_capacity" => "7.1 cu-ft",
                "curb_weight" => "3,314 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "47",
                "fuel_capacity" => "19.0",
                "cargo_capacity" => "5.3 cu-ft",
                "curb_weight" => "2,994 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "48",
                "fuel_capacity" => "19.0",
                "cargo_capacity" => "7.4 cu-ft",
                "curb_weight" => "3,062 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "49",
                "fuel_capacity" => "19.0",
                "cargo_capacity" => "5.7 cu-ft",
                "curb_weight" => "3,384 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "50",
                "fuel_capacity" => "19.0",
                "cargo_capacity" => "20.0 cu-ft",
                "curb_weight" => "3,384 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "51",
                "fuel_capacity" => "17.4",
                "cargo_capacity" => "13.1 cu-ft",
                "curb_weight" => "3,781 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "52",
                "fuel_capacity" => "21.1",
                "cargo_capacity" => "12.9 cu-ft",
                "curb_weight" => "4,200 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "53",
                "fuel_capacity" => "",
                "cargo_capacity" => "",
                "curb_weight" => "4,718 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "54",
                "fuel_capacity" => "22.5",
                "cargo_capacity" => "",
                "curb_weight" => "5,126 lb",
                "towing_capacity" => "7,700 lb",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "55",
                "fuel_capacity" => "21.1",
                "cargo_capacity" => "85.0 cu-ft",
                "curb_weight" => "5,225 lb",
                "towing_capacity" => "7,000 lb",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

            ],
            [
                "car_id" => "56",
                "fuel_capacity" => "22.5",
                "cargo_capacity" => "6.2 cu-ft",
                "curb_weight" => "3,573 lb",
                "towing_capacity" => "7,700 lb",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

            ],
            [
                "car_id" => "57",
                "fuel_capacity" => "16.2",
                "cargo_capacity" => "15.4 cu-ft",
                "curb_weight" => "3,253 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

            ],
            [
                "car_id" => "58",
                "fuel_capacity" => "18.0",
                "cargo_capacity" => "14.3 cu-ft",
                "curb_weight" => "3,609 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

            ],
            [
                "car_id" => "59",
                "fuel_capacity" => "10.8",
                "cargo_capacity" => "14.7 cu-ft",
                "curb_weight" => "2,599 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

            ],
            [
                "car_id" => "60",
                "fuel_capacity" => "14.3",
                "cargo_capacity" => "N/A",
                "curb_weight" => "3,020 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

            ],
            [
                "car_id" => "61",
                "fuel_capacity" => "24.0",
                "cargo_capacity" => "2.2 cu-ft",
                "curb_weight" => "3,043 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""
            ],
            [
                "car_id" => "62",
                "fuel_capacity" => "26.4",
                "cargo_capacity" => "23.6/62.9 cu-ft",
                "curb_weight" => "4,652 lb",
                "towing_capacity" => "1,653/7,716 lb",
                "GVWR" => "6,327 lb",
                "payload_capacity" => "1,675 lb",
                "tonnage" => ""

            ],
            [
                "car_id" => "63",
                "fuel_capacity" => "23.7",
                "cargo_capacity" => "17.6/47.3 cu-ft",
                "curb_weight" => "4,222 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

            ],
            [
                "car_id" => "64",
                "fuel_capacity" => "N/R",
                "cargo_capacity" => "14.3 cu-ft",
                "curb_weight" => "4,568 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

            ],
            [
                "car_id" => "65",
                "fuel_capacity" => "15.8",
                "cargo_capacity" => "15.1 cu-ft",
                "curb_weight" => "3,310 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

            ],
            [
                "car_id" => "66",
                "fuel_capacity" => "14.5",
                "cargo_capacity" => "15.2 cu-ft",
                "curb_weight" => "4,250 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

            ],
            [
                "car_id" => "67",
                "fuel_capacity" => "37.5",
                "cargo_capacity" => "9.6 cu-ft",
                "curb_weight" => "4,255 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

            ],
            [
                "car_id" => "68",
                "fuel_capacity" => "14.5",
                "cargo_capacity" => "37.6/69.8 cu-ft",
                "curb_weight" => "3,690 lb",
                "towing_capacity" => "1,500 lb",
                "GVWR" => "4,610 lb",
                "payload_capacity" => "1,230 lb",
                "tonnage" => ""
            ],
            [
                "car_id" => "69",
                "fuel_capacity" => "13.7",
                "cargo_capacity" => "10.2 cu-ft",
                "curb_weight" => "3,181 lb",
                "towing_capacity" => "",
                "GVWR" => "",
                "payload_capacity" => "",
                "tonnage" => ""

            ],
        ]);
    }
}
