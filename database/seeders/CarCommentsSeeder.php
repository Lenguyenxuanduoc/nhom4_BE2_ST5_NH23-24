<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('car_comments')->insert([
            [
                'user_id' => '3',
                'car_id' => '3',
                'content' => 'This is nice car!',
                'comment_date' => '2024/03/22'
            ],
            [
                'user_id' => '4',
                'car_id' => '3',
                'content' => 'WOW!',
                'comment_date' => '2024/04/23'
            ],
            [
                'user_id' => '3',
                'car_id' => '4',
                'content' => 'So expensive!',
                'comment_date' => '2024/02/13'
            ],
            [
                'user_id' => '3',
                'car_id' => '1',
                'content' => 'I wanna buy it!',
                'comment_date' => '2024/04/01'
            ]
        ]);
    }
}
