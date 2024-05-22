<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("posts_comments") -> insert([
            [
                "posts_id" => "1", 
                "user_id" => "2",
                "content" =>  "First Look Worth the Look: Maserati's Breathtakingly Gorgeous Electric Convertible            ",
                "comment_date" => "2024/04/04",
            ],
            [
                "posts_id" => "2 ", 
                "user_id" => "2",
                "content" =>  "Maserati’s future starts now, with its first all-electric SUV. ",
                "comment_date" => "2024/04/03",
            ],
            [
                "posts_id" => "3", 
                "user_id" => "3",
                "content" =>  "Tesla Range Estimates May Have Been Manipulated to Help Sell Cars",
                "comment_date" => "2024/04/13",
            ],
            [
                "posts_id" => "4", 
                "user_id" => "2",
                "content" =>  "How Much Can a Tesla Tow? ",
                "comment_date" => "2024/04/19",
            ],
            [
                "posts_id" => "4", 
                "user_id" => "3",
                "content" =>  "How far can Porsche’s most-popular EV crossover drive on one charge?",
                "comment_date" => "2024/04/05",
            ],
        ]);
    }
}
