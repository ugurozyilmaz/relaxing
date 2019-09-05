<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Song;
use Faker\Generator as Faker;


$factory->define(Song::class, function (Faker $faker) {
    $created = \Carbon\Carbon::now()->subDay()->subHours(random_int(0, 40));

    return [
        'name' => $faker->cityPrefix,
        'description' => $faker->text,
        'url' => $faker->url,
        'created_at' => $created->timestamp,
        'updated_at' => $created->timestamp
    ];
});
