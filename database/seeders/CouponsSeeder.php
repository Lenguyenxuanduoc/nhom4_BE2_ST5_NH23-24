<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CouponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('coupons')->insert([
            [
                'code' => 'DISCOUNT10',
                'discount' => 10000,
                'discount_type' => 'fixed',
                'valid_from' => Carbon::now()->subDays(5),
                'valid_until' => Carbon::now()->addDays(5),
                'usage_limit' => 3,
                'times_used' => 0
            ],
            [
                'code' => 'PERCENT30',
                'discount' => 30,
                'discount_type' => 'percent',
                'valid_from' => Carbon::now()->subDays(10),
                'valid_until' => Carbon::now()->addDays(10),
                'usage_limit' => 3,
                'times_used' => 0
            ],
            [
                'code' => 'DISCOUNT50', // Hết hạn
                'discount' => 50000,
                'discount_type' => 'fixed',
                'valid_from' => Carbon::now()->subDays(30),
                'valid_until' => Carbon::now()->subDays(1),
                'usage_limit' => 2,
                'times_used' => 0
            ],
            [
                'code' => 'LIMITED100',
                'discount' => 100000,
                'discount_type' => 'fixed',
                'valid_from' => Carbon::now()->subDays(2),
                'valid_until' => Carbon::now()->addDays(2),
                'usage_limit' => 1,
                'times_used' => 0
            ],
        ]);
    }
}
