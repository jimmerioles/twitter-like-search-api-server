<?php

use Faker\Generator as Faker;

$factory->define(App\Status::class, function (Faker $faker) {
    $date = $faker->dateTimeInInterval('-'. rand(1, 10000) .' minutes', 'now');

    return [
        'text' => $faker->realText(),
        'created_at' => $date,
        'updated_at' => $date
    ];
});
