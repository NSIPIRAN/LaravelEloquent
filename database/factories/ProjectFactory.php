<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'city_id' => 1,
        'company_id' => 1,
        'name' => $faker->text(25),
        'execution_date' => now(),
        'is_active' => 1,
    ];
});
