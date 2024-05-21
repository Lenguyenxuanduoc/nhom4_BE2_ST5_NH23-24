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
                "username" => "toilavu",
                "password" => Hash::make("toilavu2212"),
                "email" => "mainguyenhoangvu2212@gmail.com",
                "name" => "Hoang Vu",
                "address" => "Binh Duong",
                "permission" => true
            ],
            [
                "username" => "xuanduoc",
                "password" => Hash::make("xuanduoc123"),
                "email" => "lenguynxuandc@gmail.com",
                "name" => "Xuan Duoc",
                "address" => "TP HCM",
                "permission" => true
            ],
            [
                "username" => "thanhcong",
                "password" => Hash::make("thanhcong123"),
                "email" => "truonganhthanhcong@gmail.com",
                "name" => "Thanh Cong",
                "address" => "TP HCM",
                "permission" => false
            ],
            [
                "username" => "phuquy",
                "password" => Hash::make("phuquy123"),
                "email" => "quyliphu@gmail.com",
                "name" => "Phu Quy",
                "address" => "TP HCM",
                "permission" => false
            ],
        ]);
    }
}
