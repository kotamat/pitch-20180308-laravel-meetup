<?php

namespace App\Utility;

use Faker\Generator as Faker;

class ModelFactoryParams
{
    public static function params()
    {
        $faker = app(Faker::class);
        static $password;

        return [
            'User' => [
                'name'           => $faker->name,
                'email'          => $faker->unique()->safeEmail,
                'password'       => $password ?: $password = bcrypt('secret'),
                'remember_token' => str_random(10),
            ],
        ];
    }

}