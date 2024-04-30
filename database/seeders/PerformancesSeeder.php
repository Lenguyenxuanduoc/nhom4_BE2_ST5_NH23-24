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
            ],
            [
                //Ferrari 296 GTB
                "car_id" => "12",
                "engine"=>"Hybrid V6",
                "trim"=>"Base Coupe",
                "horsepower"=>"Approximately 830 horsepower",
                "torque"=>"Approximately 740 Nm",
                "cylinders"=>"6",
                "standard_mpg"=>"25/1",
                "transmission"=>"8-speed automatic",
                "transmission_type"=>"Automatic"
            ],
            [
                //Ferrari F8
                "car_id" => "13",
                "engine"=>"3.9-liter twin-turbocharged V8",
                "trim"=>"Spider",
                "horsepower"=>"710 horsepower",
                "torque"=>"568 lb-ft",
                "cylinders"=>"8",
                "standard_mpg"=>"9/17",
                "transmission"=>"7-speed dual-clutch automatic",
                "transmission_type"=>"Automatic"
            ],
            [
                //Ferrari SF90
                "car_id" => "14",
                "engine"=>"Hybrid Twin-Turbocharged V8",
                "trim"=>"Stradale Coupe",
                "horsepower"=>"Approximately 986 horsepower",
                "torque"=>"Approximately 800 Nm (590 lb-ft)",
                "cylinders"=>"8",
                "standard_mpg"=>"20/25",
                "transmission"=>"8-speed dual-clutch automatic",
                "transmission_type"=>"Automatic"
            ],
            [
                //Ferrari SF90 Stradale
                "car_id" => "15",
                "engine"=>"Hybrid Twin-Turbocharged V8",
                "trim"=>"Base Coupe",
                "horsepower"=>"Approximately 986 horsepower",
                "torque"=>"Approximately 800 Nm (590 lb-ft)",
                "cylinders"=>"8",
                "standard_mpg"=>"20/25",
                "transmission"=>"8-speed dual-clutch automatic",
                "transmission_type"=>"Automatic"
            ],
            [
                //Ford F-150
                "car_id" => "16",
                "engine"=>"V8 Flex Fuel 5.0 Liter",
                "trim"=>"XL 2WD Short Bed Regular Cab",
                "horsepower"=>"400@6,000",
                "torque"=>"410@4,250",
                "cylinders"=>"8",
                "standard_mpg"=>"12/19",
                "transmission"=>"SelectShift® 10 Speed Automatic with Manual Mode Select",
                "transmission_type"=>"Automatic"
            ],
            [
                //Ford Mustang GTD
                "car_id" => "17",
                "engine"=>"V8",
                "trim"=>"Base Coupe",
                "horsepower"=>"Approximately 480 horsepower",
                "torque"=>"Around 420 lb-ft",
                "cylinders"=>"8",
                "standard_mpg"=>"18/20",
                "transmission"=>"10-speed automatic",
                "transmission_type"=>"Automatic"
            ],
            [
                //Lamborghini Huracan
                "car_id" => "18",
                "engine"=>"5.2-liter naturally aspirated V10",
                "trim"=>"EVO Coupe",
                "horsepower"=>"Approximately 610-640 horsepower",
                "torque"=>"Around 413-443 lb-ft",
                "cylinders"=>"10",
                "standard_mpg"=>"13/15",
                "transmission"=>"7-speed dual-clutch automatic",
                "transmission_type"=>"Automatic"
            ],
            [
                //Lamborghini Revuelto
                "car_id" => "19",
                "engine"=>"V12",
                "trim"=>"Base AWD",
                "horsepower"=>"Estimated to be in the range of 600-700+ horsepower",
                "torque"=>"Expect significant torque output, possibly in the range of 500-600+ lb-ft",
                "cylinders"=>"10",
                "standard_mpg"=>"10/15",
                "transmission"=>"Dual-clutch automatic transmission for quick and precise gear shifts",
                "transmission_type"=>"Automatic"
            ],
            [
                //Nissan Ariya
                "car_id" => "20",
                "trim"=>"Venture+",
                "horsepower"=>"",
                "engine"=>"The power output of the Ariya Venture+ trim could be around 215-239 horsepower",
                "torque"=>"Electric motors deliver strong torque, and the Ariya Venture+ might have torque in the range of 221-443 Nm",
                "cylinders"=>"4",
                "standard_mpg"=>"",
                "transmission"=>"Single-speed transmission or direct drive",
                "transmission_type"=>""
            ],
            [
                //Nissan Z
                "car_id" => "21",
                "engine"=>"V6 Turbo 3.0 Liter",
                "trim"=>"Sport (Manual) Coupe",
                "horsepower"=>"400@6,400",
                "torque"=>"350@1,600",
                "cylinders"=>"6",
                "standard_mpg"=>"18/24",
                "transmission"=>"6 Speed Manual",
                "transmission_type"=>"Manual"
            ],
            [
                "car_id" => "22",
                "engine" => "V8 Turbo 4.4 Liter",
                "trim" => "Competition Gran Coupe",
                "horsepower" => "617@6,000",
                "torque" => "553@1,800",
                "cylinders" => "8",
                "standard_mpg" => "15/22",
                "transmission" => "8 Speed Automatic with Manual Mode",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "23",
                "engine" => "4-Cyl Turbo 2.0 Liter",
                "trim" => "xDrive28i",
                "horsepower" => "241@4,500",
                "torque" => "295@1,500",
                "cylinders" => "4",
                "standard_mpg" => "25/34",
                "transmission" => "Steptronic 7 Speed Automatic with Manual Mode Select",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "24",
                "engine" => "6-Cyl Turbo 3.0 Liter",
                "trim" => "xDrive40i",
                "horsepower" => "375@5,200",
                "torque" => "398@1,850",
                "cylinders" => "6",
                "standard_mpg" => "23/26",
                "transmission" => "Steptronic 8 Speed Automatic with Manual Mode Select",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "25",
                "engine" => "V8 Turbo 4.4 Liter",
                "trim" => "Base",
                "horsepower" => "644@5,400",
                "torque" => "590@1,060",
                "cylinders" => "8",
                "standard_mpg" => "46/46",
                "transmission" => "Steptronic Automatic with Manual Mode",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "26",
                "engine"=> "Motor, Single Electric",
                "trim"=> "eDrive40 Sedan",
                "horsepower"=> "335",
                "torque"=> "295",
                "cylinders"=> "6",
                "standard_mpg"=> "104/105",
                "transmission"=> "1 Speed Automatic",
                "transmission_type"=> "Automatic"
            ],
            [
                "car_id" => "27",
                "engine" => "4-Cyl Turbo 2.0 Liter",
                "trim" => "2LT FWD",
                "horsepower" => "228@5,500",
                "torque" => "258@1,500",
                "cylinders" => "4",
                "standard_mpg" => "22/29",
                "transmission" => "9 Speed Automatic with Manual Mode",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "28",
                "engine" => "4-Cyl Turbo 2.0 Liter",
                "trim" => "1LS Coupe",
                "horsepower" => "275@5,600",
                "torque" => "295@3,000",
                "cylinders" => "4",
                "standard_mpg" => "19/28",
                "transmission" => "Tremec 6 Speed Manual",
                "transmission_type" => "Manual"
            ],
            [
                "car_id" => "29",
                "engine" => "V8 5.3 Liter EcoTec3",
                "trim" => "LS 2WD",
                "horsepower" => "355@5,600",
                "torque" => "383@4,100",
                "cylinders" => "8",
                "standard_mpg" => "15/20",
                "transmission" => "10 Speed Automatic Mode Select",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "30",
                "engine" => "3-Cyl Turbo 1.2 Liter EcoTec",
                "trim" => "LS FWD",
                "horsepower" => "137@5,000",
                "torque" => "162@2,500",
                "cylinders" => "3",
                "standard_mpg" => "29/31",
                "transmission" => "Continuously Variable Automatic with Manual Mode Select",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "31",
                "engine" => "3-Cyl Turbo 1.2 Liter",
                "trim" => "LS",
                "horsepower" => "137@5,000",
                "torque" => "162@2,500",
                "cylinders" => "3",
                "standard_mpg" => "28/32",
                "transmission" => "Hydra-Matic 6 Speed Automatic",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "32",
                "engine" => "4-Cyl 2.4 Liter",
                "trim" => "SE Sedan",
                "horsepower" => "173@6,000",
                "torque" => "166@4,400",
                "cylinders" => "4",
                "standard_mpg" => "21/30",
                "transmission" => "4 Speed Automatic Mode Select (VLP)",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "33",
                "engine" => "V6 3.6 Liter PentaStar",
                "trim" => "SXT Coupe",
                "horsepower" => "304@6,350",
                "torque" => "268@4,800",
                "cylinders" => "6",
                "standard_mpg" => "19/30",
                "transmission" => "TorqueFlite® 8 Speed Automatic with Manual Mode Select",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "34",
                "engine" => "V6 3.6 Liter Pentastar",
                "trim" => "SXT Sedan",
                "horsepower" => "292@6,350",
                "torque" => "260@4,800",
                "cylinders" => "6",
                "standard_mpg" => "19/30",
                "transmission" => "TorqueFlite® 8 Speed Automatic with Manual Mode",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "35",
                "engine" => "4-Cyl 2.4 Liter",
                "trim" => "SE Value Pkg FWD",
                "horsepower" => "173@6,000",
                "torque" => "166@4,000",
                "cylinders" => "4",
                "standard_mpg" => "19/25",
                "transmission" => "AutoStick 4 Speed Automatic with Manual Mode Select (40TES)",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "36",
                "engine" => "4-Cyl, 2.0 Liter",
                "trim" => "SE Sedan",
                "horsepower" => "132@5,600",
                "torque" => "130@4,600",
                "cylinders" => "4",
                "standard_mpg" => "25/32",
                "transmission" => "5 Speed Manual",
                "transmission_type" => "Manual"
            ],
            [
                "car_id" => "37",
                "engine" => "V8 Turbo 3.9 Liter",
                "trim" => "SE Sedan",
                "horsepower" => "612 hp @ 7,500 rpm",
                "torque" => "561 Nm @ 5,750 rpm",
                "cylinders" => "8",
                "standard_mpg" => "15/22 mpg (City/Highway)",
                "transmission" => "8-speed dual-clutch automatic",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "38",
                "engine" => "4-Cyl Turbo 2.3 Liter EcoBoost®",
                "trim" => "2-Door Big Bend",
                "horsepower" => "275",
                "torque" => "315",
                "cylinders" => "4",
                "standard_mpg" => "17/17",
                "transmission" => "7 Speed Manual",
                "transmission_type" => "Manual"
            ],
            [
                "car_id" => "39",
                "engine" => "4-Cyl Turbo 2.0 Liter EcoBoost",
                "trim" => "SE",
                "horsepower" => "250 @ 5,500",
                "torque" => "280 @ 3,000",
                "cylinders" => "4",
                "standard_mpg" => "21/28",
                "transmission" => "SelectShift 8 Speed Automatic with Manual Mode",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "40",
                "engine" => "Motor, Single Electric",
                "trim" => "Select RWD",
                "horsepower" => "266",
                "torque" => "317",
                "cylinders" => "8",
                "standard_mpg" => "110/96",
                "transmission" => "1 Speed Automatic",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "41",
                "engine" => "4-Cyl 2.5 Liter Smartstream",
                "trim" => "SE FWD Extended Cab",
                "horsepower" => "191@6,100",
                "torque" => "181@4,000",
                "cylinders" => "4",
                "standard_mpg" => "22/26",
                "transmission" => "SHIFTRONIC 8 Speed Automatic with Manual Mode",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "42",
                "engine" => "4-Cyl 2.0 Liter Smartstream",
                "trim" => "Blue Sedan",
                "horsepower" => "192@6,000",
                "torque" => "139@5,000",
                "cylinders" => "4",
                "standard_mpg" => "50/54",
                "transmission" => "SHIFTRONIC 6 Speed Automatic with Manual Mode",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "43",
                "engine" => "4-Cyl 2.5 Liter Smartstream",
                "trim" => "SE FWD",
                "horsepower" => "187@6,100",
                "torque" => "178@4,000",
                "cylinders" => "4",
                "standard_mpg" => "25/32",
                "transmission" => "SHIFTRONIC® 8 Speed Automatic with Manual Mode Select",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "44",
                "engine" => "4-Cyl 1.6 Liter Gamma",
                "trim" => "SE",
                "horsepower" => "121@6,300",
                "torque" => "113@4,500",
                "cylinders" => "4",
                "standard_mpg" => "29/33",
                "transmission" => "SHIFTRONIC® Continuously Variable Automatic",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "45",
                "engine" => "V6 3.8 Liter Lambda II",
                "trim" => "SE FWD",
                "horsepower" => "291@6,000",
                "torque" => "262@5,200",
                "cylinders" => "6",
                "standard_mpg" => "19/26",
                "transmission" => "SHIFTRONIC® 8 Speed Automatic with Manual Mode Select",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "46",
                "engine" => "V8 Turbo 3.8 Liter",
                "trim" => "Base Coupe",
                "horsepower" => "562@7,500",
                "torque" => "443@5,000",
                "cylinders" => "8",
                "standard_mpg" => "15/22",
                "transmission" => "7 Speed Automatic with Manual Mode (SSG)",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "47",
                "engine" => "V8 Turbo 3.8 Liter",
                "trim" => "Base Coupe",
                "horsepower" => "600@7,500",
                "torque" => "457@5,500",
                "cylinders" => "8",
                "standard_mpg" => "15/22",
                "transmission" => "7 Speed Automatic with Manual Mode (SSG)",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "48",
                "engine" => "V8 Turbo 4.0 Liter",
                "trim" => "Base Coupe",
                "horsepower" => "720@7,500",
                "torque" => "568@5,500",
                "cylinders" => "8",
                "standard_mpg" => "15/22",
                "transmission" => "7 Speed Automatic with Manual Mode",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "49",
                "engine" => "V6 Turbo 3.0 Liter",
                "trim" => "Base Coupe",
                "horsepower" => "671@7,500",
                "torque" => "531@2,250",
                "cylinders" => "6",
                "standard_mpg" => "37/41",
                "transmission" => "8 Speed Automatic with Manual Mode",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "50",
                "engine" => "V8 Turbo 4.0 Liter",
                "trim" => "Base Coupe",
                "horsepower" => "620@7,500",
                "torque" => "465@5,500",
                "cylinders" => "8",
                "standard_mpg" => "15/22",
                "transmission" => "7 Speed Automatic with Manual Mode",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "51",
                "engine" => "4-Cyl Turbo 2.0 Liter",
                "trim" => "E350 Sedan",
                "horsepower" => "255@5,500",
                "torque" => "273@1,300",
                "cylinders" => "4",
                "standard_mpg" => "23/31",
                "transmission" => "9G-TRONIC 9 Speed Automatic with Manual Mode Select",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "52",
                "engine" => "4-Cyl Turbo Diesel 2.1 Liter BlueTEC®",
                "trim" => "E250 Luxury Sedan",
                "horsepower" => "195@3,800",
                "torque" => "369@1,600",
                "cylinders" => "4",
                "standard_mpg" => "28/42",
                "transmission" => "7G-TRONIC PLUS 7 Speed Automatic with Manual Mode Select (722.9)",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "53",
                "engine" => "Motors, Dual Electric",
                "trim" => "EQB 250+",
                "horsepower" => "188",
                "torque" => "284",
                "cylinders" => "6",
                "standard_mpg" => "128/116",
                "transmission" => "1 Speed Automatic",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "54",
                "engine" => "6-Cyl Turbo 3.0 Liter",
                "trim" => "GLE53 AMG 4Matic",
                "horsepower" => "429@6,100",
                "torque" => "384@1,800",
                "cylinders" => "6",
                "standard_mpg" => "17/21",
                "transmission" => "AMG SPEEDSHIFT TCT 9 Speed Automatic with Manual Mode",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "55",
                "engine" => "V6, Turbo Diesel, 3.0 Liter",
                "trim" => "R350 BlueTEC",
                "horsepower" => "210@3,400",
                "torque" => "400@1,600",
                "cylinders" => "6",
                "standard_mpg" => "18/23",
                "transmission" => "7 Speed Automatic",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "56",
                "engine" => "V8 6.2 Liter",
                "trim" => "GT Final Edition Coupe",
                "horsepower" => "583@6,800",
                "torque" => "479@4,750",
                "cylinders" => "8",
                "standard_mpg" => "13/19",
                "transmission" => "AMG SPEEDSHIFT 7 Speed Automatic",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "57",
                "engine" => "4-Cyl 2.5 Liter",
                "trim" => "S Sedan",
                "horsepower" => "188@6,000",
                "torque" => "180@3,600",
                "cylinders" => "4",
                "standard_mpg" => "27/39",
                "transmission" => "Xtronic Continuously Variable Automatic Mode Select",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "58",
                "engine" => "V6 3.5 Liter",
                "trim" => "SV Sedan",
                "horsepower" => "300@6,400",
                "torque" => "261@4,400",
                "cylinders" => "6",
                "standard_mpg" => "20/30",
                "transmission" => "Xtronic Continuously Variable Automatic with Manual Mode Select",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "59",
                "engine" => "4-Cyl 1.6 Liter",
                "trim" => "S (Manual) Sedan",
                "horsepower" => "122@6,300",
                "torque" => "114@4,000",
                "cylinders" => "4",
                "standard_mpg" => "27/35",
                "transmission" => "5 Speed Manual",
                "transmission_type" => "Manual"
            ],
            [
                "car_id" => "60",
                "engine" => "4-Cyl Turbo 2.0 Liter",
                "trim" => "Base Convertible",
                "horsepower" => "300@6,500",
                "torque" => "280@1,950",
                "cylinders" => "4",
                "standard_mpg" => "20/25",
                "transmission" => "6 Speed Manual",
                "transmission_type" => "Manual"
            ],
            [
                "car_id" => "61",
                "engine" => "V10, 5.7 Liter",
                "trim" => "Base Convertible",
                "horsepower" => "605@8,000",
                "torque" => "435@5,750",
                "cylinders" => "10",
                "standard_mpg" => "9/15",
                "transmission" => "6 Speed Manual",
                "transmission_type" => "Manual"
            ],
            [
                "car_id" => "62",
                "engine" => "V6 Turbo Diesel 3.0 Liter",
                "trim" => "Base",
                "horsepower" => "240@3,500",
                "torque" => "406@1,750",
                "cylinders" => "6",
                "standard_mpg" => "20/29",
                "transmission" => "Tiptronic S 8 Speed Automatic with Manual Mode",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "63",
                "engine" => "V6 Turbo 2.9 Liter",
                "trim" => "Base Hatchback",
                "horsepower" => "325@5,400",
                "torque" => "331@1,800",
                "cylinders" => "6",
                "standard_mpg" => "18/24",
                "transmission" => "8 Speed Automatic with Manual Mode",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "64",
                "engine" => "Motors, Dual Electric",
                "trim" => "Base Sedan",
                "horsepower" => "402",
                "torque" => "254",
                "cylinders" => "6",
                "standard_mpg" => "76/84",
                "transmission" => "2 Speed Automatic",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "65",
                "engine" => "4-Cyl 2.5 Liter",
                "trim" => "LE Sedan",
                "horsepower" => "203@6,600",
                "torque" => "184@5,000",
                "cylinders" => "4",
                "standard_mpg" => "28/39",
                "transmission" => "ECT-i 8 Speed Automatic with Manual Mode Select",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "66",
                "engine" => "4-Cyl 2.5 Liter Dynamic Force",
                "trim" => "XLE",
                "horsepower" => "236@6,000",
                "torque" => "163@3,600",
                "cylinders" => "4",
                "standard_mpg" => "42/41",
                "transmission" => "ECVT Continuously Variable Automatic",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "67",
                "engine" => "Motor, Single Electric",
                "trim" => "XLE Sedan",
                "horsepower" => "182",
                "torque" => "300",
                "cylinders" => "6",
                "standard_mpg" => "76/71",
                "transmission" => "1 Speed Automatic",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "68",
                "engine" => "4-Cyl 2.5 Liter",
                "trim" => "LE AWD",
                "horsepower" => "219@5,300",
                "torque" => "163@3,600",
                "cylinders" => "4",
                "standard_mpg" => "41/38",
                "transmission" => "ECVT Continuously Variable Automatic with Manual Mode Select",
                "transmission_type" => "Automatic"
            ],
            [
                "car_id" => "69",
                "engine" => "4-Cyl Turbo 2.0 Liter",
                "trim" => "2.0 Coupe",
                "horsepower" => "255@5,000",
                "torque" => "295@1,550",
                "cylinders" => "4",
                "standard_mpg" => "25/31",
                "transmission" => "8 Speed Automatic with Manual Mode",
                "transmission_type" => "Automatic"
            ],
        ]);
    }
}
