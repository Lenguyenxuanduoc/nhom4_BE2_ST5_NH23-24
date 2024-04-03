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
                "car_id" => "1",
                "front_headroom" => "37.6 in",
                "rear_headroom" => "34.8 in",
                "front_legroom" => "44.5 in",
                "rear_legroom" => "29.0 in",
                "front_shoulder_room" => "56.3 in",
                "rear_shoulder_room" => "52.2 in"
            ]
        ]);
    }
}
