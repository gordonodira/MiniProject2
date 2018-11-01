<?php

use Faker\Generator as Faker;

       $factory->define(App\Car::class, function (Faker $faker) {
           return [

               'make' => $faker->randomElement(['Toyota','Honda','Ford']),
               'model' => $faker->randomElement(['CARA','CARB','CARC']),
               'year' => $faker->year,
               //'email_verified_at' => now(),
              // 'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
              // 'remember_token' => str_random(10),
           ];

           //
       });
