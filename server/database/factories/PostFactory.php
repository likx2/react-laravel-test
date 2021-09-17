<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        Post::TITLE_COLUMN => $faker->text,
        Post::CONTENT_COLUMN => $faker->text,
    ];
});
