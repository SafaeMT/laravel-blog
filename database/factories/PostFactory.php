<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_date' => $faker->dateTime,
        'post_content' => $faker->text,
        'post_title' => $faker->text(rand(15, 85)),
        'post_status' => $faker->text(20),
        'post_name' => $faker->text(rand(10, 200)),
        'post_type' => $faker->text(20),
        'post_category' => [ 'culture', 'sport', 'news', 'politics'][rand(0, 3)],
    ];
});
