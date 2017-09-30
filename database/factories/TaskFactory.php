<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Task::class, function (Faker $faker) {
    return [
    	// Between 1- 8 because in the seeder of users , it was created 8 records
        'user_id' => $faker->numberBetween(1,8),
        'name' => $faker->text(100)

        // Optional: Put field with default value
    ];
});
