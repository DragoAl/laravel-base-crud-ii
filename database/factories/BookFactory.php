<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker -> words(2, true) ,
        'autor' => $faker -> name() ,
        'release_date' => $faker -> date() ,
        'pages' => $faker -> numberBetween(50, 200) ,
        'publisher' => $faker -> word() 
    ];
});
