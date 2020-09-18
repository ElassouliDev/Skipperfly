<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $admins_id = \App\User::pluck('id')->toArray();
    $categories_id = \App\Models\Category::pluck('id')->toArray();
    $images = ['B1.png','B2.png','B3.png','B4.png','B5.png','B6.png','B7.png','B8.png'];

    return [
        'user_id'=>$faker->randomElement($admins_id),
        'image'=>$faker->randomElement($images),
        'category_id'=>$faker->randomElement($categories_id),
        'en'=>[
        'title'=>'the strangest booth at ces 2018!!!! the strangest booth at ces 2018!!!!the strangest booth at ces 2018!!!!',
        'description'=>'Day 2 of CES 2018 we explored some smaller booths and found some one of the craziest booths in this hall! Oh, and also ran into David Oh,and also ran into Davi one of the craziest booths in this hall! Oh,',
        'content'=>' <p>Hey all how are you doing?! I spent the weekend organizing like crazy and trying to
                                    stay busy and keep up with work at home! Not always the easiest with 3 distractions
                                    (hi Atticus, Rosie, and Frankie).I wanted to share more about <a href="#"
                                        title="">SkipperFly</a> I have been using the last couple weeks! I posted on
                                    insta that I was going to be using the Olay Wrinkle Correction Serum with Vitamin B3
                                    + Peptides and have been using it morning and night! I absolutely love using serums
                                    – I use them religiously. 1. Because I notice a difference with my skin when I use
                                    serums and 2. I love how my make up looks overtop a serum! It somehow adds an extra
                                    glow to your face! Above are unretouched pictures of me with no makeup and just the
                                    Olay serum and then one with my makeup overtop the serum! It makes your skin feel
                                    nice and dewy. This serum has peptides and B3 so it will nourish your skin! Here is
                                    a link to their whole line of serums at Target.com – they have several that target
                                    different concerns!</p>
                                <p>
                                    Less commute time,<br>
                                    Fewer costs (transportation and food),<br>
                                    More free time,<br>
                                    Less work-related frustration,<br>
                                    Higher level of job satisfaction, etc.
                                <p>
                                    Also, there are plenty of advantages of remote work for employers, too:<br>
                                    Decreased operational costs,<br>
                                    Lower carbon footprint,<br>
                                    Better access to applicants,<br>
                                    Higher employee productivity,<br>
                                    Increased staff retention, etc
                                </p>

                                <h3>Weekend Link Lists</h3>

                                <p>
                                    Decreased operational costs,<br>
                                    Lower carbon footprint,<br>
                                    Better access to applicants,<br>
                                    Higher employee productivity,<br>
                                    Increased staff retention, etc.
                                </p> '
    ]


    ];
});
