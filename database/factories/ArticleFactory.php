<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->text(40),
        'slug' => str_slug($faker->title),
        'description_short' => $faker->text(100),
        'description' => $faker->text(300),
        'meta_title' => $faker->text(40),
        'meta_description' => $faker->text(60),
        'meta_keyword' => $faker->text(30),
        'published' => $faker->boolean,
        'viewed' => $faker->boolean,
        'created_by' => function () {
            return factory(App\User::class)->make()->id;
        },
        'modified_by' => function () {
            return factory(App\User::class)->make()->id;
        },
    ];
});
