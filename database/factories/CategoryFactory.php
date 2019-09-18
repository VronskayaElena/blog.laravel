<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title' => $faker->text(10),
        'slug' => str_slug($faker->text),
        'parent_id' => null,
        'published' => $faker->boolean,
        'created_by' => function () {
            return factory(App\User::class)->make()->id;
        },
        'modified_by' => function () {
            return factory(App\User::class)->make()->id;
        },
    ];
});

$factory->state(App\Category::class, 'child', function ($faker) {
    return [
        'parent_id' => factory('App\Category')->create()->id,
    ];
});