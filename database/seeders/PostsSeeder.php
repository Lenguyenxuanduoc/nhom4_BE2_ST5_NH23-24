<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("posts")->insert([
            [
                "title" => "Porsche Taycan Turbo GT Unveiled",
                "content1" => "While it’d be an extremely nuanced claim that the Porsche Taycan has been gracefully received by the community at large—from both a spiritual and commercial standpoint—there’s no doubt that when looked at in isolation, the Porsche Taycan has always been a remarkable product of high-echelon car manufacturing. Whether you like it or not, EVs are going to be a big part of the equation going forward, though I’ll be the first to insist that it’s not looking like they’ll reach “be-all-end-all” status anytime soon, if ever. Yet, we have to be prepared for them. Afterall, they’re already here and by golly, is Porsche ever pulling out all the stops to show us the way (and that there can indeed be one) when it comes to all-electric sports cars. They’ve been proving that since day zero of the platform’s existence, and while today’s announcement might be the proverbial cherry-on-top, the rest of the sundae was already tasting mighty fine. The first iteration of the 2019 Porsche Taycan Turbo S remains both relevant and impressive to this day, but Porsche has continued to improve the car through the past 5 years, by increasing performance, adding new features, and introducing additional body-styles like the more rugged and utilitarian Taycan Cross Turismo. Yet, as comprehensive as the line-up was before today, there was always that niggling feeling that something was missing. While the contemporary Taycan Turbo S can sprint from 0-100 km/h in just 2.4 seconds—already hypercar levels of performance by that measure—we had yet to experience a Porsche Taycan which was conceived in the same mold as the company’s motorsport-inspired GT road cars. Namely, the GT2, GT3, GT4, and all manner of RS variants.",
                "content2" => "Even though the latest Taycan to be unveiled uses nomenclature which was previously exclusive to the range-topping Cayenne SUV—a high-performance car in its own right—the new Porsche Taycan Turbo GT has much more in common with the aforementioned line of GT models. Those cars, as most of us are acutely aware of, are an intricate balance of power and chassis philosophies which ultimately produce a car that is as engaging to drive as it is dominant at the race track.",
                "author" => "Terence W",
                "images" => json_encode(["posts1_1.jpg", "posts1_2.jpg"]),
                "posting_date" => Carbon::now()
            ],
            [
                "title" => "Lamborghini Eccentrica",
                "content1" => "For those who grew up in the 90s, the Lamborghini Diablo is a genuine icon that represented raw power, Italian design, and for lack of a better word, dreams. Emanuel Colombini, business entrepreneur and Lamborghini collector/racer, never stopped dreaming: “The Diablo was my dream car as a kid; I remember it shiny and red on the cover of Quattroruote. At the time, it was the supercar that broke all speed records! These memories and emotions returned when I saw it again about ten years ago in a dealership, almost forgotten but charming and gritty as ever. As we went over its design and aesthetics, we realized the potential that this model could have if only we updated the lines and improved those “flaws” – for lack of a better term – of the double Gandini & Chrysler management.” As an adult, Emanuel eventually bought a Diablo GT, and envisioned his Italian exotic becoming something even more than how it left the factory.  In his own words, he was seeking to create an “unparalleled driving experience.”  Combining the power of a 5.7-liter naturally-aspirated V12 with updated styling cues, he felt the end result would be nothing short of a rolling “masterpiece.”",
                "content2" => "Emanuel hoped to emphasize the character and stylistic features of the original Diablo while maintaining its iconic nature. The BorromeodeSilva Studio has maintained a balance between size and performance, taking inspiration from the Diablo GTR. The bodywork of the “donor car” has been completely revised, except for the windshield, which remains original, while the proportions have been taken to the extreme. The interiors have been designed as the meeting point between the minimalism of the early 90s and the artfully elevated mechanics typical of luxury watchmaking.",
                "author" => "Rex Mcafee",
                "images" => json_encode(["posts2_1.jpg", "posts2_2.jpg"]),
                "posting_date" => Carbon::now()
            ],
            [
                "title" => "2024 McLaren 750S: An In-Depth Look",
                "content1" => "The new McLaren 750s is by all accounts, the successor of the company’s famous McLaren 720S, which has become the standard-bearer for the McLaren brand. It plays an important role within the lineup, serving as the reference point from which all McLaren models are built—from the 540C to the GT, and all the way up to the Senna. Suffice to say, it’s very obvious that the company needs to get this one sorted from the get-go as well, since it sets the tone for the brand going forward. These days, sports cars are becoming bigger and bulkier with the ushering in of each new generation. Of course, this has been the case for virtually all makes and models that have endured long enough to celebrate decades-long milestones. However, the growth spurts are still easily discernible even when comparing across recent iterations—which are already by no means, the nimble and dainty figures they once were all those years ago. The British automaker has chosen a more unconventional play with their new 750S, by today’s standards. Technically speaking, the 750S might as well just be a refreshed version of the outgoing 720S, if one were to go by-the-book on what constitutes a “new generation” for an automobile. This however is a classic, if not cliché, example of when less is more. So no, that’s not meant to be a slight towards either of these magnificent supercars nor McLaren’s business acumen. In fact, I think they’ve got it spot on. They get it.",
                "content2" => "As a result, the McLaren 750S is the culmination of smaller changes which cooperatively lead to meaningful improvements all around. As subtle as they might be individually, there’s enough to say that a transformation has taken place through the collective. If the 720S was a “10”, then the 750S would be a solid “11”, and going anything beyond that would place it within Senna territory—where the 750S has no intention of hanging around.
                The best analogy I could think of, is that the McLaren 750S is an ideal marriage between the civil nature of the 720S and the performance panache of the 765LT. Hmmmm….just like “Goldilocks”, and par for the course in terms of what the model represents, really.",
                "author" => "Terence W",
                "images" => json_encode(["posts3_1.jpg", "posts3_2.jpg"]),
                "posting_date" => Carbon::now()
            ],
            [
                "title" => "Nissan Z Nismo Unveiled",
                "content1" => "It features an uptuned version of the 3.0L twin-turbocharged V6 powerplant seen in the regular Z,  now producing 420 hp and 384 lb-ft of torque—an increase of 20 hp and 34 lb-ft respectively. To many enthusiasts’ chagrin, the Z Nismo is exclusively equipped with a 9-speed automatic transmission. Those desiring the 6-speed manual gearbox will have to stick with the lower models. The chassis has been improved upon too, with stiffer springs, wider wheels, stickier tires, bigger brakes, motorsport-derived suspension bushings, and additional bracing all coming together to make for a more precise, engaging and agile driving machine. In typical Nismo fashion, the interior in the latest Z comes standard with the iconic Recaro sport bucket seats, with the seat cushions finished in a popping red-black-leather-alcantara combo. Driver assistance tech, such as blind-sport monitoring and lane-departure warning, also come as part of the package.",
                "content2" => "",
                "author" => "Terence W",
                "images" => json_encode(["posts4_1.jpg", "posts4_2.jpg", "posts4_3.jpg", "posts4_4.jpg", "posts4_5.jpg", "posts4_6.jpg"]),
                "posting_date" => Carbon::now()
            ]
        ]);
    }
}
