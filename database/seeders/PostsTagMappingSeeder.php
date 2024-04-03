<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsTagMappingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("posts_tag_mapping")->insert([
            [
                "tag_id" => "1",
                "posts_id" => "1"
            ],
            [
                "tag_id" => "1",
                "posts_id" => "2"
            ],
            [
                "tag_id" => "1",
                "posts_id" => "3"
            ]
        ]);
    }
}
