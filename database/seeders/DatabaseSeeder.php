<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ManufacturersSeeder::class,
            CategoriesSeeder::class,
            CarsSeeder::class,
            PerformancesSeeder::class,
            InteriorsSeeder::class,
            ExteriorsSeeder::class,
            WeightsCapacitiesSeeder::class,
            UsersSeeder::class,
            PostsSeeder::class,
            PostsTagsSeeder::class,
            PostsTagMappingSeeder::class
        ]);
    }
}
