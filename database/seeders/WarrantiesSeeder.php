<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarrantiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("warranties") -> insert([
            [
                 //Ford Mustang
                 "car_id" => "1",
                 "free_maintenance_miles" => "None",
                 "full_warranty_miles" => "36000",
                 "powertrain_warranty_miles" => "60000",
                 "roadside_warranty_miles" => "60000",
                 "corrosion_warranty_miles" => "Unlimited",
                 "free_maintenance_months" => "None",
                 "full_warranty_months" => "36",
                 "powertrain_warranty_months" => "60",
                 "roadside_warranty_months" => "",
                 "corrosion_warranty_months" => "60"

            ],
            [
                //Lamborghini Huracan
                "car_id" => "2",
                "free_maintenance_miles" => "None",
                "full_warranty_miles" => "Unlimited",
                "powertrain_warranty_miles" => "Unlimited",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_miles" => "Unlimited",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "powertrain_warranty_months" => "36",
                "roadside_warranty_months" => "N/A",
                "corrosion_warranty_months" => "144"

                
            ],
            [
                //McLaren 720S
                "car_id" => "3",
                "free_maintenance_miles" => "None",
                "full_warranty_miles" => "Unlimited",
                "powertrain_warranty_miles" => "Unlimited",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_miles" => "N/A",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "powertrain_warranty_months" => "36",
                "roadside_warranty_months" => "N/A",
                "corrosion_warranty_months" => "N/A"

            ],
            [
                //Nissan GT-R
                "car_id" => "4",
                "free_maintenance_miles" => "None",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_miles" => "36000",
                "corrosion_warranty_miles" => "Unlimited",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "powertrain_warranty_months" => "60",
                "roadside_warranty_months" => "N/A",
                "corrosion_warranty_months" => "60"

            ],
            [
                //BMW
                "car_id" => "5",
                "free_maintenance_miles" => "None",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_miles" => "Unlimited",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "48",
                "powertrain_warranty_months" => "48",
                "roadside_warranty_months" => "N/A",
                "corrosion_warranty_months" => "144"

            ],
            [
                //Chevrolet
                "car_id" => "6",
                "free_maintenance_miles" => "None",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_miles" => "60000",
                "corrosion_warranty_miles" => "100000",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "powertrain_warranty_months" => "60",
                "roadside_warranty_months" => "N/A",
                "corrosion_warranty_months" => "72"

            ],
            [
                //Dodge
                "car_id" => "7",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "60000",
                "corrosion_warranty_months" => "36",
                "corrosion_warranty_miles" => "Unlimited"

            ],
            [
                //Ferrari
                "car_id" => "8",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "Unlimited",
                "powertrain_warranty_months" => "36",
                "powertrain_warranty_miles" => "Unlimited",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "N/A",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                //Huyndai
                "car_id" => "9",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "60",
                "full_warranty_miles" => "60000",
                "powertrain_warranty_months" => "120",
                "powertrain_warranty_miles" => "100000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "84",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                //Porsche
                "car_id" => "10",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "48",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_months" => "48",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "50000",
                "corrosion_warranty_months" => "144",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                //Toyota
                "car_id" => "11",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "9999999",
                "corrosion_warranty_months" => "60",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                //Ferrari 296 GTB
                "car_id" => "12",
                "free_maintenance_miles" => "N/A",
                "free_maintenance_months" => "N/A",
                "full_warranty_months" => "N/A",
                "full_warranty_miles" => "N/A",
                "powertrain_warranty_months" => "N/A",
                "powertrain_warranty_miles" => "N/A",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "N/A",
                "corrosion_warranty_months" => "N/A",
                "corrosion_warranty_miles" => "N/A"
            ],
            [
                //Ferrari F8
                "car_id" => "13",
                "free_maintenance_miles" => "N/A",
                "free_maintenance_months" => "N/A",
                "full_warranty_months" => "N/A",
                "full_warranty_miles" => "N/A",
                "powertrain_warranty_months" => "N/A",
                "powertrain_warranty_miles" => "N/A",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "N/A",
                "corrosion_warranty_months" => "N/A",
                "corrosion_warranty_miles" => "N/A"
            ],
            [
                //Ferrari SF90
                "car_id" => "14",
                "free_maintenance_miles" => "N/A",
                "free_maintenance_months" => "N/A",
                "full_warranty_months" => "N/A",
                "full_warranty_miles" => "N/A",
                "powertrain_warranty_months" => "N/A",
                "powertrain_warranty_miles" => "N/A",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "N/A",
                "corrosion_warranty_months" => "N/A",
                "corrosion_warranty_miles" => "N/A"
            ],
            [
                //Ferrari SF90 Stradale
                "car_id" => "15",
                "free_maintenance_miles" => "N/A",
                "free_maintenance_months" => "N/A",
                "full_warranty_months" => "N/A",
                "full_warranty_miles" => "N/A",
                "powertrain_warranty_months" => "N/A",
                "powertrain_warranty_miles" => "N/A",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "N/A",
                "corrosion_warranty_months" => "N/A",
                "corrosion_warranty_miles" => "N/A"
            ],
            [
                //Ford F-150
                "car_id" => "16",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "60000",
                "corrosion_warranty_months" => "60",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                //Ford Mustang GTD
                "car_id" => "17",
                "free_maintenance_miles" => "N/A",
                "free_maintenance_months" => "N/A",
                "full_warranty_months" => "N/A",
                "full_warranty_miles" => "N/A",
                "powertrain_warranty_months" => "N/A",
                "powertrain_warranty_miles" => "N/A",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "N/A",
                "corrosion_warranty_months" => "N/A",
                "corrosion_warranty_miles" => "N/A"
            ],
            [
                //Lamborghini Huracan
                "car_id" => "18",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "Unlimited",
                "powertrain_warranty_months" => "36",
                "powertrain_warranty_miles" => "Unlimited",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "144",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                //Lamborghini Revuelto
                "car_id" => "19",
                "free_maintenance_miles" => "N/A",
                "free_maintenance_months" => "N/A",
                "full_warranty_months" => "N/A",
                "full_warranty_miles" => "N/A",
                "powertrain_warranty_months" => "N/A",
                "powertrain_warranty_miles" => "N/A",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "N/A",
                "corrosion_warranty_months" => "N/A",
                "corrosion_warranty_miles" => "N/A"
            ],
            [
                //Nissan Ariya
                "car_id" => "20",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "36000",
                "corrosion_warranty_months" => "60",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                //Nissan Z
                "car_id" => "21",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "36000",
                "corrosion_warranty_months" => "60",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "22",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "48",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_months" => "48",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "144",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "23",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "48",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_months" => "48",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "9999999",
                "corrosion_warranty_months" => "144",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "24",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "48",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_months" => "48",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "144",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "25",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "48",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_months" => "48",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "144",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "26",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "48",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_months" => "48",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "144",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "27",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "60000",
                "corrosion_warranty_months" => "72",
                "corrosion_warranty_miles" => "100000"
            ],
            [
                "car_id" => "28",
                "free_maintenance_miles" => "10000",
                "free_maintenance_months" => "12",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "60000",
                "corrosion_warranty_months" => "72",
                "corrosion_warranty_miles" => "100000"
            ],
            [
                "car_id" => "29",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "60000",
                "corrosion_warranty_months" => "72",
                "corrosion_warranty_miles" => "100000"
            ],
            [
                "car_id" => "30",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "60000",
                "corrosion_warranty_months" => "72",
                "corrosion_warranty_miles" => "100000"
            ],
            [
                "car_id" => "31",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "60000",
                "corrosion_warranty_months" => "72",
                "corrosion_warranty_miles" => "100000"
            ],
            [
                "car_id" => "32",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "100000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "36000",
                "corrosion_warranty_months" => "60",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "33",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "60000",
                "corrosion_warranty_months" => "36",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "34",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "60000",
                "corrosion_warranty_months" => "36",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "35",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "60000",
                "corrosion_warranty_months" => "36",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "36",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "84",
                "powertrain_warranty_miles" => "70000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "N/A",
                "corrosion_warranty_months" => "60",
                "corrosion_warranty_miles" => "100000"
            ],
            [
                "car_id" => "37",
                "free_maintenance_miles" => "N/A",
                "free_maintenance_months" => "N/A",
                "full_warranty_months" => "N/A",
                "full_warranty_miles" => "N/A",
                "powertrain_warranty_months" => "N/A",
                "powertrain_warranty_miles" => "N/A",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "N/A",
                "corrosion_warranty_months" => "N/A",
                "corrosion_warranty_miles" => "N/A"
            ],
            [
                "car_id" => "38",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "60000",
                "corrosion_warranty_months" => "60",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "39",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "60000",
                "corrosion_warranty_months" => "60",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "40",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "60000",
                "corrosion_warranty_months" => "60",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "41",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "60",
                "full_warranty_miles" => "60000",
                "powertrain_warranty_months" => "120",
                "powertrain_warranty_miles" => "100000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "84",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "42",
                "free_maintenance_miles" => "36000",
                "free_maintenance_months" => "36",
                "full_warranty_months" => "60",
                "full_warranty_miles" => "60000",
                "powertrain_warranty_months" => "120",
                "powertrain_warranty_miles" => "100000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "84",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "43",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "60",
                "full_warranty_miles" => "60000",
                "powertrain_warranty_months" => "120",
                "powertrain_warranty_miles" => "100000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "84",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "44",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "60",
                "full_warranty_miles" => "60000",
                "powertrain_warranty_months" => "120",
                "powertrain_warranty_miles" => "100000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "84",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "45",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "60",
                "full_warranty_miles" => "60000",
                "powertrain_warranty_months" => "120",
                "powertrain_warranty_miles" => "100000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "84",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "46",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "Unlimited",
                "powertrain_warranty_months" => "36",
                "powertrain_warranty_miles" => "Unlimited",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "120",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "47",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "Unlimited",
                "powertrain_warranty_months" => "36",
                "powertrain_warranty_miles" => "Unlimited",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "120",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "48",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "Unlimited",
                "powertrain_warranty_months" => "36",
                "powertrain_warranty_miles" => "Unlimited",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "120",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "49",
                "free_maintenance_miles" => "N/A",
                "free_maintenance_months" => "N/A",
                "full_warranty_months" => "N/A",
                "full_warranty_miles" => "N/A",
                "powertrain_warranty_months" => "N/A",
                "powertrain_warranty_miles" => "N/A",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "N/A",
                "corrosion_warranty_months" => "N/A",
                "corrosion_warranty_miles" => "N/A"
            ],
            [
                "car_id" => "50",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "Unlimited",
                "powertrain_warranty_months" => "36",
                "powertrain_warranty_miles" => "Unlimited",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "120",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "51",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "48",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_months" => "48",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "50000",
                "corrosion_warranty_months" => "48",
                "corrosion_warranty_miles" => "50000"
            ],
            [
                "car_id" => "52",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "48",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_months" => "48",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "50000",
                "corrosion_warranty_months" => "48",
                "corrosion_warranty_miles" => "50000"
            ],
            [
                "car_id" => "53",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "48",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_months" => "48",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "50000",
                "corrosion_warranty_months" => "48",
                "corrosion_warranty_miles" => "50000"
            ],
            [
                "car_id" => "54",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "48",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_months" => "48",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "50000",
                "corrosion_warranty_months" => "48",
                "corrosion_warranty_miles" => "50000"
            ],
            [
                "car_id" => "55",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "48",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_months" => "48",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "50000",
                "corrosion_warranty_months" => "48",
                "corrosion_warranty_miles" => "50000"

            ],
            [
                "car_id" => "56",
                "free_maintenance_miles" => "",
                "full_warranty_miles" => "",
                "powertrain_warranty_miles" => "",
                "roadside_warranty_miles" => "",
                "corrosion_warranty_miles" => "",
                "free_maintenance_months" => "",
                "full_warranty_months" => "",
                "powertrain_warranty_months" => "",
                "roadside_warranty_months" => "",
                "corrosion_warranty_months" => ""

            ],
            [
                "car_id" => "57",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "48",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_months" => "48",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "50000",
                "corrosion_warranty_months" => "48",
                "corrosion_warranty_miles" => "50000"

            ],
            [
                "car_id" => "58",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "36000",
                "corrosion_warranty_months" => "60",
                "corrosion_warranty_miles" => "Unlimited"

            ],
            [
                "car_id" => "59",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "36000",
                "corrosion_warranty_months" => "60",
                "corrosion_warranty_miles" => "Unlimited"

            ],
            [
                "car_id" => "60",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "36000",
                "corrosion_warranty_months" => "60",
                "corrosion_warranty_miles" => "Unlimited"

            ],
            [
                "car_id" => "61",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "48",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_months" => "48",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "50000",
                "corrosion_warranty_months" => "144",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "62",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "48",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_months" => "48",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "N/A",
                "corrosion_warranty_months" => "120",
                "corrosion_warranty_miles" => "Unlimited"

            ],
            [
                "car_id" => "63",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "48",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_months" => "48",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "50000",
                "corrosion_warranty_months" => "144",
                "corrosion_warranty_miles" => "Unlimited"

            ],
            [
                "car_id" => "64",
                "free_maintenance_miles" => "10000",
                "free_maintenance_months" => "12",
                "full_warranty_months" => "48",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_months" => "48",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "50000",
                "corrosion_warranty_months" => "144",
                "corrosion_warranty_miles" => "Unlimited"

            ],
            [
                "car_id" => "65",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "48",
                "full_warranty_miles" => "50000",
                "powertrain_warranty_months" => "48",
                "powertrain_warranty_miles" => "50000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "50000",
                "corrosion_warranty_months" => "144",
                "corrosion_warranty_miles" => "Unlimited"

            ],
            [
                "car_id" => "66",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "60",
                "corrosion_warranty_miles" => "Unlimited"

            ],
            [
                "car_id" => "67",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "Unlimited",
                "corrosion_warranty_months" => "60",
                "corrosion_warranty_miles" => "Unlimited"

            ],
            [
                "car_id" => "68",
                "free_maintenance_miles" => "25000",
                "free_maintenance_months" => "24",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "9999999",
                "corrosion_warranty_months" => "60",
                "corrosion_warranty_miles" => "Unlimited"
            ],
            [
                "car_id" => "69",
                "free_maintenance_miles" => "None",
                "free_maintenance_months" => "None",
                "full_warranty_months" => "36",
                "full_warranty_miles" => "36000",
                "powertrain_warranty_months" => "60",
                "powertrain_warranty_miles" => "60000",
                "roadside_warranty_months" => "N/A",
                "roadside_warranty_miles" => "9999999",
                "corrosion_warranty_months" => "60",
                "corrosion_warranty_miles" => "Unlimited"

            ],
        ]);
    }
}
