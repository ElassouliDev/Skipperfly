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
      

    ];
});
