<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \\DB::table("users")->insert([
            [
                "email" => "admin",
                "password" => "admin",
                "address" => "Binh Duong",
                "permission" => true
            ],
            [
                "username" => "user1",
                "password" => "user1",
                "address" => "TP HCM",
                "permission" => false
            ],
            [
                "username" => "user2",
                "password" => "user2",
                "address" => "Ha Noi",
                "permission" => false
            ]
        ]);
    }
}
