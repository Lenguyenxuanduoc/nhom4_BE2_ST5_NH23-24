<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('brands')->insert([
            [
                'name' => 'BMW',
                'logo' => 'bmw.jpg',
                'banner' => 'bmw.jpg',
                'founded_year' => '1916',
                'founder_name' => 'Franz Josef Popp, Karl Rapp',
                'slug' => Str::slug('BMW'),
                'description' => "BMW (Bavarian Motor Works) is a German automobile company founded in 1916,
                it also owns and produces Mini cars and Rolls-Royce Motor Cars.
                BMW is one of three best-selling luxury automakers in the world, along with Audi and Mercedes-Benz.
                BMW is still an independent auto manufacturer which is very rare in this day and age.",
            ],
            [
                'name' => 'Chevrolet',
                'logo' => 'chevrolet.jpg',
                'banner' => 'chevrolet.jpg',
                'founded_year' => '1911',
                'founder_name' => 'Louis Chervolet',
                'slug' => Str::slug('Chevrolet'),
                'description' => "Chevrolet, also known as Chevy, is a car company owned by General Motors 1 2 3.
                It was created in 1911 by Louis Chevrolet 1 3 . Chevrolet is known for producing popular, affordable cars,
                from subcompact cars to beefy trucks 4 5 . Chevrolet produces the Corvette, one of the most famous sports cars in the world 1 4 .
                Its trademark logo is a 'bow tie'",
            ],
            [
                'name' => 'Dodge',
                'logo' => 'dodge.jpg',
                'banner' => 'dodge.jpg',
                'founded_year' => '1990',
                'founder_name' => 'John Francis Dodge, Horace Elgin Dodge',
                'slug' => Str::slug('Dodge'),
                'description' => "Dodge is one of America's oldest and most recognizable automakers. Today, as part of Stellantis, Dodge trades on old-fashioned American values such as size, power, and style. The Challenger coupe and Charger sedan are muscle cars that garner lots of attention thanks to their numerous high-powered SRT and Hellcat variants.",
            ],
            [
                'name' => 'Ferrari',
                'logo' => 'ferrari.jpg',
                'banner' => 'ferrari.jpg',
                'founded_year' => '1947',
                'founder_name' => 'Enzo Ferrari',
                'slug' => Str::slug('Ferrari'),
                'description' => "Ferrari is an Italian auto brand making in high-end and high-performance racing cars, supercars, and sports cars. Founded by Enzo Ferrari in 1939 out of Alfa Romeo's race division, built its first car in 1940. Company's inception as manufacturer is usually recognized in 1947, when the first Ferrari-badged car was completed.",
            ],
            [
                'name' => 'Ford',
                'logo' => 'ford.jpg',
                'banner' => 'ford.jpg',
                'founded_year' => '1903',
                'founder_name' => 'Henry Ford',
                'slug' => Str::slug('Ford'),
                'description' => 'Ford Motor Company (commonly known as Ford) is an American multinational automobile manufacturer headquartered in Dearborn, Michigan, United States. It was founded by Henry Ford and incorporated on June 16, 1903. The company sells automobiles and commercial vehicles under the Ford brand, and luxury cars under its Lincoln brand.',
            ],
            [
                'name' => 'Hyundai',
                'logo' => 'hyundai.jpg',
                'banner' => 'hyundai.jpg',
                'founded_year' => '1967',
                'founder_name' => 'Chung Ju-yung',
                'slug' => Str::slug('Hyundai'),
                'description' => 'Hyundai Motor Co (Hyundai) is an automobile company. The company designs, develops, manufactures and distributes cars, trucks, buses, SUVs, MPV and hydrogen vehicles; and chassis, powertrains and automotive parts. Hyundai also provides vehicle financing and credit card processing services.',
            ],
            [
                'name' => 'Lamborghini',
                'logo' => 'lamborghini.jpg',
                'banner' => 'lamborghini.jpg',
                'founded_year' => '1963',
                'founder_name' => 'Ferruccio Lamborghini',
                'slug' => Str::slug('Lamborghini'),
                'description' => "Automobili Lamborghini S.p.A. is an Italian brand and manufacturer of luxury supercars, sports cars, SUVs based in Sant'Agata Bolognese and tractors Lamborghini Trattori in Pieve di Cento, Italy. The company is owned by the Volkswagen Group through its subsidiary Audi.",
            ],
            [
                'name' => 'McLaren',
                'logo' => 'mclaren.jpg',
                'banner' => 'mclaren.jpg',
                'founded_year' => '1963',
                'founder_name' => 'Bruce McLaren',
                'slug' => Str::slug('McLaren'),
                'description' => 'McLaren Automotive (McLaren) is a British automotive manufacturer of luxury, high-performance sports cars. To mark their move to the McLaren Technology Centre, the McLaren logo was refined and updated in 2002 with a more modern design; the now familiar speedmark was retained.',
            ],
            [
                'name' => 'Nissan',
                'logo' => 'nissan.jpg',
                'banner' => 'nissan.jpg',
                'founded_year' => '1963',
                'founder_name' => 'Yoshisuke Aikawa',
                'slug' => Str::slug('Nissan'),
                'description' => 'Nissan Motor Co Ltd is a Japanese multinational automobile manufacturer. The company carries out the design, production and sale of automobile products, including sedans, compact cars, SUVs, sports cars, minivans, kei cars, light commercial vehicles, and related parts. Nissan is widely reputed for building Japanese quality, reliable vehicles with great value, good performance, and modern styling.',
            ],
            [
                'name' => 'Porsche',
                'logo' => 'porsche.jpg',
                'banner' => 'porsche.jpg',
                'founded_year' => '1931',
                'founder_name' => 'Ferdinand Porsche',
                'slug' => Str::slug('Porsche'),
                'description' => "Porsche AG, is a German automobile manufacturer specializing in high-performance sports cars, SUVs and sedans. Porsche AG is headquartered in Stuttgart, and is owned by Volkswagen AG, which is itself majority-owned by Porsche Automobil Holding SE. Porsche's current lineup includes the 718 Boxster/Cayman, 911, Panamera, Macan and Cayenne.",
            ],
            [
                'name' => 'Toyota',
                'logo' => 'toyota.jpg',
                'banner' => 'toyota.jpg',
                'founded_year' => '1937',
                'founder_name' => 'Sakichi Toyoda',
                'slug' => Str::slug('Toyota'),
                'description' => 'For several decades Toyota was Japan’s largest automobile manufacturer. The company continued to thrive in the American market as well, gaining a reputation for its low-cost, fuel-efficient, and reliable vehicles such as the Corolla, which was released in the United States in 1968.',
            ],
            [
                'name' => 'Mercedes Benz',
                'logo' => 'mercedesbenz.jpg',
                'banner' => 'mercedesbenz.jpg',
                'founded_year' => '1926',
                'founder_name' => 'Karl Benz, Gottlieb Daimler',
                'slug' => Str::slug('Mercedes Benz'),
                'description' => "Mercedes-Benz is a global automobile marque and a division of the German company Daimler AG. The brand is known for luxury vehicles, buses, coaches, and lorries. It is also the name of the world's oldest continuously produced automobile line. Its contemporary competition in automobile production is from BMW, Audi, Lexus, Cadillac and Infiniti.",
            ],
        ]);
    }
}
