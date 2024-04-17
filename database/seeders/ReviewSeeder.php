<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("reviews") -> insert([
            //00
           [
               
           "car_id" => "1", 
           "performance" =>"1.8", // chèn từ 1->10 kiểu float
           "efficency_range" => "3.5",  // chèn từ 1->10 kiểu float
           "tech_innovation" => "3.6",// chèn từ 1->10 kiểu float
           "value" => "9999.9",// chèn từ 1->10 kiểu float
           "comment" => "If your delivery packages are late, Mercedes electric van might be to blame."
           ],


            //00
            [
               
                "car_id" => "2", 
                "performance" =>"1.8", // chèn từ 1->10 kiểu float
                "efficency_range" => "3.5",  // chèn từ 1->10 kiểu float
                "tech_innovation" => "3.6",// chèn từ 1->10 kiểu float
                "value" => "9999.9",// chèn từ 1->10 kiểu float
                "comment" => "If your delivery packages are late, Mercedes electric van might be to blame."
                ],


                 //00
           [
               
            "car_id" => "3", 
            "performance" =>"1.8", // chèn từ 1->10 kiểu float
            "efficency_range" => "3.5",  // chèn từ 1->10 kiểu float
            "tech_innovation" => "3.6",// chèn từ 1->10 kiểu float
            "value" => "9999.9",// chèn từ 1->10 kiểu float
            "comment" => "If your delivery packages are late, Mercedes electric van might be to blame."
            ],


             //00
           [
               
            "car_id" => "4", 
            "performance" =>"1.8", // chèn từ 1->10 kiểu float
            "efficency_range" => "3.5",  // chèn từ 1->10 kiểu float
            "tech_innovation" => "3.6",// chèn từ 1->10 kiểu float
            "value" => "9999.9",// chèn từ 1->10 kiểu float
            "comment" => "If your delivery packages are late, Mercedes electric van might be to blame."
            ],


             //00
           [
               
            "car_id" => "5", 
            "performance" =>"1.8", // chèn từ 1->10 kiểu float
            "efficency_range" => "3.5",  // chèn từ 1->10 kiểu float
            "tech_innovation" => "3.6",// chèn từ 1->10 kiểu float
            "value" => "9999.9",// chèn từ 1->10 kiểu float
            "comment" => "If your delivery packages are late, Mercedes electric van might be to blame."
            ],


             //00
           [
               
            "car_id" => "6", 
            "performance" =>"1.8", // chèn từ 1->10 kiểu float
            "efficency_range" => "3.5",  // chèn từ 1->10 kiểu float
            "tech_innovation" => "3.6",// chèn từ 1->10 kiểu float
            "value" => "9999.9",// chèn từ 1->10 kiểu float
            "comment" => "If your delivery packages are late, Mercedes electric van might be to blame."
            ],

          


           
          
       ]);
    }
}
