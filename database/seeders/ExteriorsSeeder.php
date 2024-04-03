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
                "car_id" => "1",
                "length" => "189.4 in",
                "width" => "75.4 in",
                "height" => "55.0 in",
                "wheelbase" => "107.0 in"
            ]
        ]);
    }
}
