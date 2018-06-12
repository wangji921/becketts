<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Photo::class, function (Faker $faker) {

    $sentence = $faker->sentence();

    // random datetime in one month
    $updated_at = $faker->dateTimeThisMonth();
    // 传参为生成最大时间不超过，创建时间永远比更改时间要早
    $created_at = $faker->dateTimeThisMonth($updated_at);

    return [
        // 'name' => $faker->name,
        'title' => $sentence,
        'year' => $faker->year(),
        'month' => $faker->month(),
        'description' => $faker->text(),
        'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];
});
