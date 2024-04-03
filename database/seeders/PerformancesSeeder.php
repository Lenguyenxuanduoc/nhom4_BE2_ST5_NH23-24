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
                "car_id"=>"1",
                "engine"=>"4-Cyl Turbo 2.3 Liter EcoBoost®",
                "trim"=>"EcoBoost Coupe",
                "horsepower"=>"315@5,000",
                "torque"=>"350@3,000",
                "cylinders"=>"4",
                "standard_mpg"=>"22/33",
                "transmission"=>"10 Speed Automatic with Manual Mode",
                "transmission_type"=>"Automatic"
            ]
        ]);
    }
}
