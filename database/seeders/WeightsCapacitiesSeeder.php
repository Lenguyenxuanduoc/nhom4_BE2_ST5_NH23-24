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
                "car_id" => "1",
                "fuel_capacity" => "16.0",
                "cargo_capacity" => "13.3 cu-ft",
                "curb_weight" => "3,579 lb"
            ]
        ]);
    }
}
