<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'Date' => $faker->Date,
        'Project' => $faker->Project,
        'TicketNumber' => $faker->TicketNumber,
        'TicketSubject' => $faker->TicketSubject,
        'Timein'=>$faker->Time,
        'Timeout'=>$faker->Time,
        
    ];
});
 