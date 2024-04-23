<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("reviews") -> insert([
            [
                "car_id" => "1", 
                "performance" =>"7.6", 
                "efficency_range" => "8.4",  
                "tech_innovation" => "7.8",
                "value" => "9",
                "comment" => ""
            ],
            [
                "car_id" => "2", 
                "performance" =>"8.4", 
                "efficency_range" => "8.7",  
                "tech_innovation" => "8.3",
                "value" => "9",
                "comment" => ""
            ],
            [
                "car_id" => "3", 
                "performance" =>"8.4", 
                "efficency_range" => "9",  
                "tech_innovation" => "8.6",
                "value" => "8.8",
                "comment" => ""
            ],
            [
                "car_id" => "4", 
                "performance" =>"8.2", 
                "efficency_range" => "8.8",  
                "tech_innovation" => "8.5",
                "value" => "9",
                "comment" => ""
            ],
            [
                "car_id" => "5", 
                "performance" =>"7.7", 
                "efficency_range" => "9.5",  
                "tech_innovation" => "8.2",
                "value" => "9",
                "comment" => ""
            ],
            [
                "car_id" => "6", 
                "performance" =>"8.7", 
                "efficency_range" => "7",  
                "tech_innovation" => "8",
                "value" => "10",
                "comment" => ""
            ],
            [
                "car_id" => "7", 
                "performance" =>"7.7", 
                "efficency_range" => "5.4",  
                "tech_innovation" => "8.5",
                "value" => "8",
                "comment" => ""
            ],
            [
                "car_id" => "8", 
                "performance" =>"8.7", 
                "efficency_range" => "8.4",  
                "tech_innovation" => "8.5",
                "value" => "9",
                "comment" => ""
            ],
            [
                "car_id" => "9", 
                "performance" =>"8.7", 
                "efficency_range" => "8.6",  
                "tech_innovation" => "9",
                "value" => "10",
                "comment" => ""
            ],
            [
                "car_id" => "10", 
                "performance" =>"8.4", 
                "efficency_range" => "7.2",  
                "tech_innovation" => "7.8",
                "value" => "10",
                "comment" => ""
            ],
            [
                "car_id" => "11", 
                "performance" =>"6.4", 
                "efficency_range" => "9.2",  
                "tech_innovation" => "8",
                "value" => "10",
                "comment" => ""
            ],
       ]);
    }
}
