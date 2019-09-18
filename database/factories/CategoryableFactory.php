<?php

use Faker\Generator as Faker;

$factory->define(App\Categoryable::class, function (Faker $faker) {
    return [
        'category_id' => function () {
            return factory(App\Category::class)->make()->id;
        },
        'categoryable_id' => function () {
            return factory(App\Article::class)->make()->id;
        },
        'categoryable_type' => 'App\Article',
    ];
});
