<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    return [
        'username' => $faker -> unique() -> username,
        'email' => $faker -> unique() -> email,
        // 'phone' => $faker -> number,
        'password' => '$2y$10$/lxIiYGLVtHRW0Cf1TBX1ubpQkM8lvFyfoD490kQURszlpuq.Wxne', 
        // 'talent' => $faker -> talent,   

        
        
    ];
});