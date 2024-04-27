<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cars')->insert([
            [
                // 1
                'name' => 'Ford Mustang',
                'manufacturer_id' => '5',
                'category_id' => '4',
                'price' => '34105',
                'description' => 'The arrival of a new Mustang signals a new era for American pony car performance. The 2024 Mustang gets new engines, updated looks, and a big injection of technology. Still offered as a coupe and convertible, the 2024 Mustang uses the S650 chassis code (the last one was internally called the S550). Competition includes gas-powered rear-drive sports cars like the Dodge Challenger and Toyota GR Supra.  ',
                'quantity' => '3',
                'producing_year' => '2024',
                'images' => json_encode(['mustang1.jpg', 'mustang2.jpg', 'mustang3.jpg', 'mustang4.jpg', 'mustang5.jpg']),
                'avatar' => 'mustang-nobg.png',
                'slug' => Str::slug('Ford Mustang ' . '2024'),
            ],
            [
                // 2
                'name' => 'Lamborghini Huracan',
                'manufacturer_id' => '7',
                'category_id' => '10',
                'price' => '234405',
                'description' => '',
                'quantity' => '5',
                'producing_year' => '2023',
                'images' => json_encode(['huracan1.jpg', 'huracan2.jpg', 'huracan3.jpg', 'huracan4.jpg', 'huracan5.jpg']),
                'avatar' => 'huracan-nobg.png',
                'slug' => Str::slug('Lamborghini Huracan ' . '2023'),
            ],
            [
                // 3
                'name' => 'McLaren 720S',
                'manufacturer_id' => '8',
                'category_id' => '11',
                'price' => '330993',
                'description' => '',
                'quantity' => '2',
                'producing_year' => '2023',
                'images' => json_encode(['720s1.jpg', '720s2.jpg', '720s3.jpg', '720s4.jpg', '720s5.jpg']),
                'avatar' => '720s-nobg.png',
                'slug' => Str::slug('McLaren 720S ' . '2023'),
            ],
            [
                // 4
                'name' => 'Nissan GT-R',
                'manufacturer_id' => '9',
                'category_id' => '10',
                'price' => '140277',
                'description' => '',
                'quantity' => '3',
                'producing_year' => '2024',
                'images' => json_encode(['gtr1.jpg', 'gtr2.jpg', 'gtr3.jpg', 'gtr4.jpg', 'gtr5.jpg']),
                'avatar' => 'gtr-nobg.png',
                'slug' => Str::slug('Nissan GT-R ' . '2024'),
            ],
            [
                // 5
                'name' => 'BMW 4-Series',
                'manufacturer_id' => '1',
                'category_id' => '10',
                'price' => '178624',
                'description' => '',
                'quantity' => '3',
                'producing_year' => '2024',
                'images' => json_encode(['BMW1.jpg', 'BMW2.jpg', 'BMW3.jpg', 'BMW4.jpg', 'BMW5.jpg']),
                'avatar' => 'bmw-4-series-nobg.png',
                'slug' => Str::slug('BMW 4-Series ' . '2024'),
            ],
            [
                // 6
                'name' => 'Chevrolet Corvette',
                'manufacturer_id' => '2',
                'category_id' => '4',
                'price' => '221035',
                'description' => '',
                'quantity' => '4',
                'producing_year' => '2024',
                'images' => json_encode(['chevrolet1.jpg', 'chevrolet2.jpg', 'chevrolet3.jpg', 'chevrolet4.jpg', 'chevrolet5.jpg']),
                'avatar' => 'chevrolet-corvette-nobg.png',
                'slug' => Str::slug('Chevrolet Corvette ' . '2024'),
            ],
            [
                // 7
                'name' => 'Dodge Hornet',
                'manufacturer_id' => '3',
                'category_id' => '5',
                'price' => '127845',
                'description' => '',
                'quantity' => '5',
                'producing_year' => '2024',
                'images' => json_encode(['dodge1.jpg', 'dodge2.jpg', 'dodge3.jpg', 'dodge4.jpg', 'dodge5.jpg']),
                'avatar' => 'dodge-hornet-nobg.png',
                'slug' => Str::slug('Dodge Hornet ' . '2024'),
            ],
            [
                // 8
                'name' => 'Ferrari Daytona SP3',
                'manufacturer_id' => '4',
                'category_id' => '10',
                'price' => '593181',
                'description' => '',
                'quantity' => '2',
                'producing_year' => '2023',
                'images' => json_encode(['ferrari1.jpg', 'ferrari2.jpg', 'ferrari3.jpg', 'ferrari4.jpg', 'ferrari5.jpg']),
                'avatar' => 'Ferrari_Daytona_SP3_nobg.png',
                'slug' => Str::slug('Ferrari Daytona SP3 ' . '2023'),
            ],
            [
                // 9
                'name' => 'Huyndai Ioniq 5',
                'manufacturer_id' => '6',
                'category_id' => '10',
                'price' => '133175',
                'description' => '',
                'quantity' => '4',
                'producing_year' => '2024',
                'images' => json_encode(['huyndai1.jpg', 'huyndai2.jpg', 'huyndai3.jpg', 'huyndai4.jpg', 'huyndai5.jpg']),
                'avatar' => 'hyundai-ioniq-nobg.png',
                'slug' => Str::slug('Huyndai Ioniq 5 ' . '2024'),
            ],
            [
                // 10
                'name' => 'Porsche 911',
                'manufacturer_id' => '10',
                'category_id' => '10',
                'price' => '350336',
                'description' => '',
                'quantity' => '3',
                'producing_year' => '2024',
                'images' => json_encode(['porsche1.jpg', 'porsche2.jpg', 'porsche3.jpg', 'porsche4.jpg', 'porsche5.jpg']),
                'avatar' => 'porsche-911-nobg.png',
                'slug' => Str::slug('Porsche 911 ' . '2024'),
            ],
            [
                // 11
                'name' => 'Toyota Highlander',
                'manufacturer_id' => '11',
                'category_id' => '8',
                'price' => '120620',
                'description' => '',
                'quantity' => '4',
                'producing_year' => '2024',
                'images' => json_encode(['toyota1.jpg', 'toyota2.jpg', 'toyota3.jpg', 'toyota4.jpg', 'toyota5.jpg']),
                'avatar' => 'toyota-highlander-nobg.png',
                'slug' => Str::slug('Toyota Highlander ' . '2024'),
            ],
            [
                // 12
                'name' => 'Ferrari 296 GTB',
                'manufacturer_id' => '4',
                'category_id' => '6',
                'price' => '593181',
                'description' => '',
                'quantity' => '4',
                'producing_year' => '2024',
                'images' => json_encode(['Ferrari-296-GTB-1.jpg', 'Ferrari-296-GTB-2.jpg', 'Ferrari-296-GTB-3.jpg', 'Ferrari-296-GTB-4.jpg', 'Ferrari-296-GTB-5.jpg']),
                'avatar' => 'Ferrari-296-GTB-nobg.png',
                'slug' => Str::slug('Ferrari 296 GTB ' . '2024'),
            ],
            [
                // 13
                'name' => 'Ferrari F8',
                'manufacturer_id' => '4',
                'category_id' => '10',
                'price' => '343181',
                'description' => '',
                'quantity' => '4',
                'producing_year' => '2024',
                'images' => json_encode(['Ferrari-F8-1.jpg', 'Ferrari-F8-2.jpg', 'Ferrari-F8-3.jpg', 'Ferrari-F8-4.jpg', 'Ferrari-F8-5.jpg']),
                'avatar' => 'Ferrari-F8-Spider-nobg.png',
                'slug' => Str::slug('Ferrari F8 ' . '2024'),
            ],
            [
                // 14
                'name' => 'Ferrari SF90',
                'manufacturer_id' => '4',
                'category_id' => '10',
                'price' => '443181',
                'description' => '',
                'quantity' => '3',
                'producing_year' => '2024',
                'images' => json_encode(['ferrari-sf90-1.jpg', 'ferrari-sf90-2.jpg', 'ferrari-sf90-3.jpg', 'ferrari-sf90-4.jpg', 'ferrari-sf90-5.jpg']),
                'avatar' => 'ferrari-sf90-nobg.png',
                'slug' => Str::slug('Ferrari SF90 ' . '2024'),
            ],
            [
                // 15
                'name' => 'Ferrari SF90 Stradale',
                'manufacturer_id' => '4',
                'category_id' => '10',
                'price' => '483181',
                'description' => '',
                'quantity' => '3',
                'producing_year' => '2024',
                'images' => json_encode(['Ferrari-SF90-Stradale-1.jpg', 'Ferrari-SF90-Stradale-2.jpg', 'Ferrari-SF90-Stradale-3.jpg', 'Ferrari-SF90-Stradale-4.jpg', 'Ferrari-SF90-Stradale-5.jpg']),
                'avatar' => 'Ferrari-SF90-Spider-nobg.png',
                'slug' => Str::slug('Ferrari SF90 Stradale ' . '2024'),
            ],
            [
                // 16
                'name' => 'Ford F-150',
                'manufacturer_id' => '5',
                'category_id' => '6',
                'price' => '983181',
                'description' => '',
                'quantity' => '5',
                'producing_year' => '2024',
                'images' => json_encode(['Ford-F-150-1.jpg', 'Ford-F-150-2.jpg', 'Ford-F-150-3.jpg', 'Ford-F-150-4.jpg', 'Ford-F-150-5.jpg']),
                'avatar' => 'Ford-F-150-nobg.png',
                'slug' => Str::slug('Ford F-150 ' . '2024'),
            ],
            [
                // 17
                'name' => 'Ford Mustang GTD',
                'manufacturer_id' => '5',
                'category_id' => '10',
                'price' => '783181',
                'description' => '',
                'quantity' => '3',
                'producing_year' => '2024',
                'images' => json_encode(['ford-mustang-gtd1.jpg', 'ford-mustang-gtd2.jpg', 'ford-mustang-gtd3.jpg', 'ford-mustang-gtd4.jpg', 'ford-mustang-gtd5.jpg']),
                'avatar' => 'ford-mustang-gtd-nobg.png',
                'slug' => Str::slug('Ford Mustang GTD ' . '2024'),
            ],
            [
                // 18
                'name' => 'Lamborghini Huracan',
                'manufacturer_id' => '7',
                'category_id' => '10',
                'price' => '793181',
                'description' => '',
                'quantity' => '2',
                'producing_year' => '2024',
                'images' => json_encode(['Lamborghini-Huracan-1.jpg', 'Lamborghini-Huracan-2.jpg', 'Lamborghini-Huracan-3.jpg', 'Lamborghini-Huracan-4.jpg', 'Lamborghini-Huracan-5.jpg']),
                'avatar' => 'Lamborghini-Huracan-nobg.png',
                'slug' => Str::slug('Lamborghini Huracan ' . '2024'),
            ],
            [
                // 19
                'name' => 'Lamborghini Revuelto',
                'manufacturer_id' => '7',
                'category_id' => '10',
                'price' => '703181',
                'description' => '',
                'quantity' => '2',
                'producing_year' => '2024',
                'images' => json_encode(['lamborghini-revuelto1.jpg', 'lamborghini-revuelto2.jpg', 'lamborghini-revuelto3.jpg', 'lamborghini-revuelto4.jpg', 'lamborghini-revuelto5.jpg']),
                'avatar' => 'lamborghini-revuelto_nobg.png',
                'slug' => Str::slug('Lamborghini Revuelto ' . '2024'),
            ],
            [
                // 20
                'name' => 'Nissan Ariya',
                'manufacturer_id' => '9',
                'category_id' => '1',
                'price' => '603081',
                'description' => '',
                'quantity' => '5',
                'producing_year' => '2024',
                'images' => json_encode(['Nissan-Ariya1.jpg', 'Nissan-Ariya2.jpg', 'Nissan-Ariya3.jpg', 'Nissan-Ariya4.jpg', 'Nissan-Ariya5.jpg']),
                'avatar' => 'Nissan-Ariya-nobg.png',
                'slug' => Str::slug('Nissan Ariya ' . '2024'),
            ],
            [
                // 21
                'name' => 'Nissan Z',
                'manufacturer_id' => '9',
                'category_id' => '1',
                'price' => '753081',
                'description' => '',
                'quantity' => '5',
                'producing_year' => '2024',
                'images' => json_encode(['Nissan-Z-1.jpg', 'Nissan-Z-2.jpg', 'Nissan-Z-3.jpg', 'Nissan-Z-4.jpg', 'Nissan-Z-5.jpg']),
                'avatar' => 'Nissan-Z-nobg.png',
                'slug' => Str::slug('Nissan Z ' . '2024'),
            ],
        ]);
    }
}
