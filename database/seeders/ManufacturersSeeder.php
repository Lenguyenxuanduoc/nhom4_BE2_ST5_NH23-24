<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManufacturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("manufacturers") -> insert([
            [
                "name" => "BMW", 
                "image" => "bmw.jpg",
                "founded_year" => "1916",
                "founder_name" => "Franz Josef Popp, Karl Rapp",
                "description" => "BMW (Bavarian Motor Works) is a German automobile company founded in 1916, 
                it also owns and produces Mini cars and Rolls-Royce Motor Cars. 
                BMW is one of three best-selling luxury automakers in the world, along with Audi and Mercedes-Benz. 
                BMW is still an independent auto manufacturer which is very rare in this day and age."
            ],
            [
                "name" => "Chevrolet",
                "image" => "chevrolet.jpg",
                "founded_year" => "1911",
                "founder_name" => "Louis Chervolet",
                "description" => "Chevrolet, also known as Chevy, is a car company owned by General Motors 1 2 3. 
                It was created in 1911 by Louis Chevrolet 1 3 . Chevrolet is known for producing popular, affordable cars, 
                from subcompact cars to beefy trucks 4 5 . Chevrolet produces the Corvette, one of the most famous sports cars in the world 1 4 . 
                Its trademark logo is a 'bow tie'"
            ],
            [
                "name" => "Dodge",
                "image" => "dodge.jpg",
                "founded_year" => "1990",
                "founder_name" => "John Francis Dodge, Horace Elgin Dodge",
                "description" => "Dodge is one of America's oldest and most recognizable automakers. Today, as part of Stellantis, Dodge trades on old-fashioned American values such as size, power, and style. The Challenger coupe and Charger sedan are muscle cars that garner lots of attention thanks to their numerous high-powered SRT and Hellcat variants."
            ],
            [
                "name" => "Ferrari", 
                "image" => "ferrari.jpg",
                "founded_year" => "1947",
                "founder_name" => "Enzo Ferrari",
                "description" => "Ferrari is an Italian auto brand making in high-end and high-performance racing cars, supercars, and sports cars. Founded by Enzo Ferrari in 1939 out of Alfa Romeo's race division, built its first car in 1940. Company's inception as manufacturer is usually recognized in 1947, when the first Ferrari-badged car was completed."
            ],
            [
                "name" => "Ford", 
                "image" => "ford.jpg",
                "founded_year" => "1903",
                "founder_name" => "Henry Ford",
                "description" => "Ford Motor Company (commonly known as Ford) is an American multinational automobile manufacturer headquartered in Dearborn, Michigan, United States. It was founded by Henry Ford and incorporated on June 16, 1903. The company sells automobiles and commercial vehicles under the Ford brand, and luxury cars under its Lincoln brand."
            ],
            [
                "name" => "Huyndai", 
                "image" => "huyndai.jpg",
                "founded_year" => "1967",
                "founder_name" => "Chung Ju-yung",
                "description" => "Hyundai Motor Co (Hyundai) is an automobile company. The company designs, develops, manufactures and distributes cars, trucks, buses, SUVs, MPV and hydrogen vehicles; and chassis, powertrains and automotive parts. Hyundai also provides vehicle financing and credit card processing services."
            ],
            [
                "name" => "Lamborghini", 
                "image" => "lamborghini.jpg",
                "founded_year" => "1963",
                "founder_name" => "Ferruccio Lamborghini",
                "description" => "Automobili Lamborghini S.p.A. is an Italian brand and manufacturer of luxury supercars, sports cars, SUVs based in Sant'Agata Bolognese and tractors Lamborghini Trattori in Pieve di Cento, Italy. The company is owned by the Volkswagen Group through its subsidiary Audi."
            ],
            [
                "name" => "McLaren", 
                "image" => "mclaren.jpg",
                "founded_year" => "1963",
                "founder_name" => "Bruce McLaren",
                "description" => "McLaren Automotive (McLaren) is a British automotive manufacturer of luxury, high-performance sports cars. To mark their move to the McLaren Technology Centre, the McLaren logo was refined and updated in 2002 with a more modern design; the now familiar speedmark was retained."
            ],
            [
                "name" => "Nissan", 
                "image" => "nissan.jpg",
                "founded_year" => "1963",
                "founder_name" => "Yoshisuke Aikawa",
                "description" => "Nissan Motor Co Ltd is a Japanese multinational automobile manufacturer. The company carries out the design, production and sale of automobile products, including sedans, compact cars, SUVs, sports cars, minivans, kei cars, light commercial vehicles, and related parts. Nissan is widely reputed for building Japanese quality, reliable vehicles with great value, good performance, and modern styling. The company manufactures and sells Nissan and Infiniti brand cars, sport utility vehicles and pickup trucks through a network of dealers in the United States and Canada."
            ],
            [
                "name" => "Porsche", 
                "image" => "porsche.jpg",
                "founded_year" => "1931",
                "founder_name" => "Ferdinand Porsche",
                "description" => "Porsche AG, is a German automobile manufacturer specializing in high-performance sports cars, SUVs and sedans. Porsche AG is headquartered in Stuttgart, and is owned by Volkswagen AG, which is itself majority-owned by Porsche Automobil Holding SE. Porsche's current lineup includes the 718 Boxster/Cayman, 911, Panamera, Macan and Cayenne."
            ],
            [
                "name" => "Toyota", 
                "image" => "toyota.jpg",
                "founded_year" => "1937",
                "founder_name" => "Sakichi Toyoda",
                "description" => "For several decades Toyota was Japan’s largest automobile manufacturer. The company continued to thrive in the American market as well, gaining a reputation for its low-cost, fuel-efficient, and reliable vehicles such as the Corolla, which was released in the United States in 1968."
            ],
            [
                "name" => "Mercedes Benz", 
                "image" => "mercedesbenz.jpg",
                "founded_year" => "1926",
                "founder_name" => "Karl Benz, Gottlieb Daimler",
                "description" => "Mercedes-Benz is a global automobile marque and a division of the German company Daimler AG. The brand is known for luxury vehicles, buses, coaches, and lorries. It is also the name of the world's oldest continuously produced automobile line. Its contemporary competition in automobile production is from BMW, Audi, Lexus, Cadillac and Infiniti."
            ]
        ]);
    }
}

