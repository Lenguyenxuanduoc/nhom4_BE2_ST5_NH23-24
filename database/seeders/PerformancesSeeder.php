<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerformancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("performances")->insert([
            [
                //Ford Mustang
                "car_id"=>"1",
                "engine"=>"4-Cyl Turbo 2.3 Liter EcoBoost®",
                "trim"=>"EcoBoost Coupe",
                "horsepower"=>"315@5,000",
                "torque"=>"350@3,000",
                "cylinders"=>"4",
                "standard_mpg"=>"22/33",
                "transmission"=>"10 Speed Automatic with Manual Mode",
                "transmission_type"=>"Automatic"
            ],
            [
                //Lamborghini Huracan
                "car_id" => "2",
                "engine"=>"V10 5.2 Liter",
                "trim"=>"EVO Coupe",
                "horsepower"=>"610@8,000",
                "torque"=>"413@6,500",
                "cylinders"=>"10",
                "standard_mpg"=>"13/18",
                "transmission"=>"Doppia Frizione 7 Speed Automatic with Manual Mode",
                "transmission_type"=>"Automatic"
            ],
            [
                //McLaren 720S
                "car_id" => "3",
                "engine"=>"V8 Turbo 4.0 Liter",
                "trim"=>"Base Coupe",
                "horsepower"=>"720@7,500",
                "torque"=>"568@5,500",
                "cylinders"=>"8",
                "standard_mpg"=>"15/22",
                "transmission"=>"7 Speed Automatic with Manual Mode",
                "transmission_type"=>"Automatic"
            ],
            [
                //Nissan GT-R
                "car_id" => "4",
                "engine"=>"V6 Turbo 3.8 Liter",
                "trim"=>"Premium Coupe",
                "horsepower"=>"565@6,800",
                "torque"=>"467@3,300",
                "cylinders"=>"6",
                "standard_mpg"=>"16/22",
                "transmission"=>"6 Speed Automatic with Manual Mode Select",
                "transmission_type"=>"Automatic"
            ],
            [
                //BMW
                "car_id" => "5",
                "engine"=>"4-Cyl Turbo 2.0 Liter",
                "trim"=>"430i Gran Coupe",
                "horsepower"=>"255@5,000",
                "torque"=>"295@1,550",
                "cylinders"=>"4",
                "standard_mpg"=>"25/34",
                "transmission"=>"8 Speed Automatic with Manual Mode Select",
                "transmission_type"=>"Automatic"
            ],
            [
                //Chevrolet
                "car_id" => "6",
                "engine"=>"V8 6.2 Liter",
                "trim"=>"Stingray 1LT Coupe",
                "horsepower"=>"490@6,450",
                "torque"=>"465@5,150",
                "cylinders"=>"8",
                "standard_mpg"=>"16/25",
                "transmission"=>"8 Speed Automatic with Manual Mode",
                "transmission_type"=>"Automatic"
            ],
            [
                //Dodge
                "car_id" => "7",
                "engine"=>"4-Cyl Turbo 2.0 Liter Hurricane4",
                "trim"=>"GT",
                "horsepower"=>"268",
                "torque"=>"295",
                "cylinders"=>"4",
                "standard_mpg"=>"21/29",
                "transmission"=>"9 Speed Automatic with Manual Mode",
                "transmission_type"=>"Automatic"
            ],
            [
                //Ferrari
                "car_id" => "8",
                "engine"=>"V12 6.5 Liter",
                "trim"=>"Base Coupe",
                "horsepower"=>"840@9,250",
                "torque"=>"514@7,250",
                "cylinders"=>"12",
                "standard_mpg"=>"9/17",
                "transmission"=>"7 Speed Automatic with Manual Mode",
                "transmission_type"=>"Automatic"
            ],
            [
                //Huyndai
                "car_id" => "9",
                "engine"=>"Motor, Single Electric",
                "trim"=>"SE Standard Range RWD",
                "horsepower"=>"168",
                "torque"=>"258",
                "cylinders"=>"8",
                "standard_mpg"=>"127/94",
                "transmission"=>"1 Speed Automatic",
                "transmission_type"=>"Automatic"
            ],
            [
                //Porsche
                "car_id" => "10",
                "engine"=>"6-Cyl Turbo 3.0 Liter",
                "trim"=>"Carrera Coupe",
                "horsepower"=>"379@6,500",
                "torque"=>"331@1,950",
                "cylinders"=>"6",
                "standard_mpg"=>"18/24",
                "transmission"=>"Porsche Doppelkupplung (PDK) 8 Speed Automatic with Manual Mode",
                "transmission_type"=>"Automatic"
            ],
            [
                //Toyota
                "car_id" => "11",
                "engine"=>"4-Cyl 2.5 Liter",
                "trim"=>"LE AWD",
                "horsepower"=>"219@5,300",
                "torque"=>"163@3,600",
                "cylinders"=>"4",
                "standard_mpg"=>"41/38",
                "transmission"=>"ECVT Continuously Variable Automatic with Manual Mode Select",
                "transmission_type"=>"Automatic"
            ]
        ]);
    }
}
