<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("users")->insert([
            [
                "username" => "admin",
                "password" => Hash::make("admin"),
                "address" => "Binh Duong",
                "permission" => true
            ],
            [
                "username" => "user1",
                "password" => Hash::make("user1"),
                "address" => "TP HCM",
                "permission" => false
            ],
            [
                "username" => "user2",
                "password" => Hash::make("user2"),
                "address" => "Ha Noi",
                "permission" => false
            ]
        ]);
    }
}
