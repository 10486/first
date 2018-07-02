


<?php
use Faker\Generator as Faker;


$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(),
        'img' => 'http://loremflickr.com/400/300?random='.rand(1, 100),
        'head' => $faker->numberBetween(3, 100),
        'text' => $faker->paragraph(2)
    ];
});
