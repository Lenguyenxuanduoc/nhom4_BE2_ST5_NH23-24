<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;

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
                "content" => "While it’d be an extremely nuanced claim that the Porsche Taycan has been gracefully received by the community at large—from both a spiritual and commercial standpoint—there’s no doubt that when looked at in isolation, the Porsche Taycan has always been a remarkable product of high-echelon car manufacturing. Whether you like it or not, EVs are going to be a big part of the equation going forward, though I’ll be the first to insist that it’s not looking like they’ll reach “be-all-end-all” status anytime soon, if ever. Yet, we have to be prepared for them. Afterall, they’re already here and by golly, is Porsche ever pulling out all the stops to show us the way (and that there can indeed be one) when it comes to all-electric sports cars. They’ve been proving that since day zero of the platform’s existence, and while today’s announcement might be the proverbial cherry-on-top, the rest of the sundae was already tasting mighty fine. The first iteration of the 2019 Porsche Taycan Turbo S remains both relevant and impressive to this day, but Porsche has continued to improve the car through the past 5 years, by increasing performance, adding new features, and introducing additional body-styles like the more rugged and utilitarian Taycan Cross Turismo. Yet, as comprehensive as the line-up was before today, there was always that niggling feeling that something was missing. While the contemporary Taycan Turbo S can sprint from 0-100 km/h in just 2.4 seconds—already hypercar levels of performance by that measure—we had yet to experience a Porsche Taycan which was conceived in the same mold as the company’s motorsport-inspired GT road cars. Namely, the GT2, GT3, GT4, and all manner of RS variants.
                            Even though the latest Taycan to be unveiled uses nomenclature which was previously exclusive to the range-topping Cayenne SUV—a high-performance car in its own right—the new Porsche Taycan Turbo GT has much more in common with the aforementioned line of GT models. Those cars, as most of us are acutely aware of, are an intricate balance of power and chassis philosophies which ultimately produce a car that is as engaging to drive as it is dominant at the race track.",
                "author" => "Terence W",
                "images" => json_encode(["posts1_1.jpg", "posts1_2.jpg"]),
                "posting_date" => Carbon::parse('2024-04-24'),
                "slug" => Str::slug("Porsche Taycan Turbo GT Unveiled")
            ],
            [
                "title" => "Lamborghini Eccentrica",
                "content" => "For those who grew up in the 90s, the Lamborghini Diablo is a genuine icon that represented raw power, Italian design, and for lack of a better word, dreams. Emanuel Colombini, business entrepreneur and Lamborghini collector/racer, never stopped dreaming: “The Diablo was my dream car as a kid; I remember it shiny and red on the cover of Quattroruote. At the time, it was the supercar that broke all speed records! These memories and emotions returned when I saw it again about ten years ago in a dealership, almost forgotten but charming and gritty as ever. As we went over its design and aesthetics, we realized the potential that this model could have if only we updated the lines and improved those “flaws” – for lack of a better term – of the double Gandini & Chrysler management.” As an adult, Emanuel eventually bought a Diablo GT, and envisioned his Italian exotic becoming something even more than how it left the factory.  In his own words, he was seeking to create an “unparalleled driving experience.”  Combining the power of a 5.7-liter naturally-aspirated V12 with updated styling cues, he felt the end result would be nothing short of a rolling 'masterpiece'.
                            Emanuel hoped to emphasize the character and stylistic features of the original Diablo while maintaining its iconic nature. The BorromeodeSilva Studio has maintained a balance between size and performance, taking inspiration from the Diablo GTR. The bodywork of the “donor car” has been completely revised, except for the windshield, which remains original, while the proportions have been taken to the extreme. The interiors have been designed as the meeting point between the minimalism of the early 90s and the artfully elevated mechanics typical of luxury watchmaking.",
                "author" => "Rex Mcafee",
                "images" => json_encode(["posts2_1.jpg", "posts2_2.jpg"]),
                "posting_date" => Carbon::parse('2024-03-13'),
                "slug" => Str::slug("Lamborghini Eccentrica")
            ],
            [
                "title" => "2024 McLaren 750S: An In-Depth Look",
                "content" => "The new McLaren 750s is by all accounts, the successor of the company’s famous McLaren 720S, which has become the standard-bearer for the McLaren brand. It plays an important role within the lineup, serving as the reference point from which all McLaren models are built—from the 540C to the GT, and all the way up to the Senna. Suffice to say, it’s very obvious that the company needs to get this one sorted from the get-go as well, since it sets the tone for the brand going forward. These days, sports cars are becoming bigger and bulkier with the ushering in of each new generation. Of course, this has been the case for virtually all makes and models that have endured long enough to celebrate decades-long milestones. However, the growth spurts are still easily discernible even when comparing across recent iterations—which are already by no means, the nimble and dainty figures they once were all those years ago. The British automaker has chosen a more unconventional play with their new 750S, by today’s standards. Technically speaking, the 750S might as well just be a refreshed version of the outgoing 720S, if one were to go by-the-book on what constitutes a “new generation” for an automobile. This however is a classic, if not cliché, example of when less is more. So no, that’s not meant to be a slight towards either of these magnificent supercars nor McLaren’s business acumen. In fact, I think they’ve got it spot on. They get it. 
                            As a result, the McLaren 750S is the culmination of smaller changes which cooperatively lead to meaningful improvements all around. As subtle as they might be individually, there’s enough to say that a transformation has taken place through the collective. If the 720S was a “10”, then the 750S would be a solid “11”, and going anything beyond that would place it within Senna territory—where the 750S has no intention of hanging around.
                The best analogy I could think of, is that the McLaren 750S is an ideal marriage between the civil nature of the 720S and the performance panache of the 765LT. Hmmmm….just like “Goldilocks”, and par for the course in terms of what the model represents, really.",
                "author" => "Terence W",
                "images" => json_encode(["posts3_1.jpg", "posts3_2.jpg"]),
                "posting_date" => Carbon::parse('2024-04-13'),
                "slug" => Str::slug("2024 McLaren 750S: An In-Depth Look")
            ],
            [
                "title" => "Nissan Z Nismo Unveiled",
                "content" => "It features an uptuned version of the 3.0L twin-turbocharged V6 powerplant seen in the regular Z,  now producing 420 hp and 384 lb-ft of torque—an increase of 20 hp and 34 lb-ft respectively. To many enthusiasts’ chagrin, the Z Nismo is exclusively equipped with a 9-speed automatic transmission. Those desiring the 6-speed manual gearbox will have to stick with the lower models. The chassis has been improved upon too, with stiffer springs, wider wheels, stickier tires, bigger brakes, motorsport-derived suspension bushings, and additional bracing all coming together to make for a more precise, engaging and agile driving machine. In typical Nismo fashion, the interior in the latest Z comes standard with the iconic Recaro sport bucket seats, with the seat cushions finished in a popping red-black-leather-alcantara combo. Driver assistance tech, such as blind-sport monitoring and lane-departure warning, also come as part of the package.",
                "author" => "Terence W",
                "images" => json_encode(["posts4_1.jpg", "posts4_2.jpg", "posts4_3.jpg", "posts4_4.jpg", "posts4_5.jpg", "posts4_6.jpg"]),
                "posting_date" => Carbon::parse('2024-02-16'),
                "slug" => Str::slug("Nissan Z Nismo Unveiled")
            ],
            [
                //Done
                "title" => "2025 Porsche Taycan Offers Improved EV Performance and Range",
                "content" => "It’s hard to believe that the Porsche Taycan platform is already 5 years old now, especially having personally owned a 2020 Porsche Taycan 4S (from new) for a 2-year period. Time really flies! Long story short—I loved the car from a driving dynamics POV, but living with it in the real world did present its challenges. As a former owner and Porsche enthusiast, I’ve continued to keep an eye on the Taycan’s trajectory, and on a more macroeconomic scale, how it fits within the broader picture. 
                            There’s certainly been work done to the bones, but the 2025 model was not intended as a “re-design” by any stretch of the imagination. In terms of exterior design language, the car exhibits an identical silhouette to the ones before it, with only some subtle changes requiring an up-close look in order to be detected. Doing so will reveal a more streamlined LED headlamp design and some low-key modifications made to the front fascia and rear bumper. Turbo and Turbo S variants also have their own unique cues, with additional vents being integrated to the aforementioned.  The front fenders were also reimagined to accommodate the universal styling tweaks.",
                "author" => "Terence W",
                "images" => json_encode(["posts5_1.jpg", "posts5_2.jpg", "posts5_3.jpg", "posts5_4.jpg", "posts5_5.jpg", "posts5_6.jpg"]),
                "posting_date" => Carbon::parse('2024-03-30'),
                "slug" => Str::slug("2025 Porsche Taycan Offers Improved EV Performance and Range")
            ],
            [
                //Done
                "title" => "Porsche Macan EV Unveiling: Livestream Coverage",
                "content" => "If there were ever any doubts that Porsche had little concern for the EV revolution—and that the Taycan would be a one-off compliance measure within it—then the new Macan EV will be putting all of them to bed. Not only does the new Porsche Macan EV signal the automaker’s intent to legitimately scale their fully-electric business line, but it’s also poised to make a statement on how to “do EV the right way”, particularly within the immensely popular (and lucrative) compact SUV segment that has made the Macan Porsche’s best selling vehicle. 
                            One of the key features of the new Macan is its improved aerodynamics—a crucial element in the overall performance and viability of an electric vehicle. Porsche says that a more streamlined design has resulted in a 0.25 Cd, which is an improvement of over 0.1 Cd versus the outgoing design. All else being equal, this unlocks around 85 km more range on the new body style.",
                "author" => "Terence W",
                "images" => json_encode(["posts6_1.jpg", "posts6_2.jpg", "posts6_3.jpg", "posts6_4.jpg", "posts6_5.jpg", "posts6_6.jpg"]),
                "posting_date" => Carbon::parse('2024-02-22'),
                "slug" => Str::slug("Porsche Macan EV Unveiling: Livestream Coverage")
            ],
            [
                //Done
                "title" => "De Tomaso announces P72 Hypercar delivery",
                "content" => "Established in 1959 under the visionary leadership of Argentine racing star, Alejandro De Tomaso, the De Tomaso enterprise was founded upon a fundamental yet potent concept: design and build high-performance sports cars that seamlessly melded the allure of Italian design with precision engineering. 
                            In 2019, the world witnessed the debut of the P72, an amorous tribute to the legendary sports cars of the 1960s and 70s, most notably the iconic De Tomaso P70. Even today, the P70 remains a bit of a mystery, an unlikely collaboration between two of the most formidable personalities in international motorsport, Carroll Shelby and Alejandro de Tomaso. Together, they envisioned a race car that could dominate the likes of Porsche, Ferrari and Ford.",
                "author" => "Rex Mcafee",
                "images" => json_encode(["posts7_1.jpg", "posts7_2.jpg", "posts7_3.jpg", "posts7_4.jpg", "posts7_5.jpg", "posts7_6.jpg"]),
                "posting_date" => Carbon::parse('2024-04-21'),
                "slug" => Str::slug("De Tomaso announces P72 Hypercar delivery")
            ],
            [
                //Done
                "title" => "New Porsche Taycan Variant Demolishes Tesla’s EV ‘Ring Record",
                "content" => "You could be forgiven for thinking that Porsche would be happy resting on their laurels when it comes to the Taycan. After all, there is already a plethora of existing variants—it’s a congested squad to choose from between the barebones base model, all the way up to the sufficiently bonkers Turbo S. Add to the fact that there are two distinct body styles, and the potential combinations for performance and styling become seemingly endless. 
                            On the surface, it’s just a number. But when given a bit of context, a clearer—and quite frankly, stunning—picture gets painted. This achievement places the upcoming Porsche Taycan variant in some very esteemed company, both within its own line-up and relative to other high-performance EVs. It’s not at all far off the pace of the automaker’s flagship 911 GT3 and GT3 RS models, coming in at just a few seconds behind the sub-7-minute benchmark setters. It’s virtually just as quick as the relatively brand new Porsche 718 Cayman GT4 RS MR, of which it has a near-2000-lbs weight penalty against it.",
                "author" => "Terence W",
                "images" => json_encode(["posts8_1.jpeg", "posts8_2.jpeg", "posts8_3.jpeg"]),
                "posting_date" => Carbon::parse('2024-01-13'),
                "slug" => Str::slug("New Porsche Taycan Variant Demolishes Tesla’s EV ‘Ring Record")
            ],
            [
                //Done
                "title" => "“992.2” Porsche 911 Slated For 2024 Debut",
                "content" => "Throughout past Porsche 911 generations, the unofficial “.2” denomination has come to symbolize an important milestone in the corresponding model’s life cycle. It’s at these halfway stages where the design gets a general refresh—by way of front and rear fascia makeovers, and more—and special variants like the 911 GT2 RS start being introduced in concert with closing out the model’s 8-ish-year production run. Overall, it has to be said, nothing changes too drastically. A 20 hp bump here, stiffer spring rates there, an updated infotainment system somewhere in between, and you have a car that’s ultimately improved over its “.1” equivalents but is still very much the same machine. But that was the past. 
                            For now at least, the Porsche 911 will integrate mild-hybrid technology rather than becoming a full-on PHEV. However, the latter version of hardware is already being used in the current line-up by the likes of the Cayenne and Panamera, so there may yet be accommodations for making that transition later on. Porsche has quickly debunked any notions that the universally loved driving dynamics of its quintessential sports car will be negatively affected by these changes. Rumors are currently swirling that the hybrid components will add no more than 220 lbs—neither a large nor small number, in my opinion—with everything positioned in a way that maintains favorable weight-balance characteristics.",
                "author" => "Terence W",
                "images" => json_encode(["posts9_1.jpg", "posts9_2.jpg"]),
                "posting_date" => Carbon::parse('2024-03-04'),
                "slug" => Str::slug("“992.2” Porsche 911 Slated For 2024 Debut")
            ]
        ]);
    }
}
