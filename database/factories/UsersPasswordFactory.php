<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\UsersPasswordModel::class, function (Faker $faker) {
    return [
        //

//        'user_id'=>'1001',
//            'user_name'=>'user1',
//            'email'=>'user1@hgd.com',
//            'password'=>'123456',
//            'remember_token'=>'1'
        'user_id'=>random_int(1000,9999),
        'user_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});
