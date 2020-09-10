<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ticket;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(ticket::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4,true),
        'user_id' => random_int(1,3),
        'content' => $faker->paragraphs(2,true),
        'completed' =>$faker->boolean(),
        'severity'=>$faker->boolean(),


    ];
});