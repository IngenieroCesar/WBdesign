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

/*$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
*/

//--------------------GENERACIÓN DE USUARIOS PARA DB----------------------------

use App\User;
use Faker\Generator;


$factory->define(User::class, function(Generator $faker){

  $array = [
      'name'    =>    $faker->name,
      'apellido'  =>    $faker->lastName,
      'cedula'    =>    $faker->creditCardNumber,
      'mobile'    =>    $faker->phoneNumber,
      'email'     =>    $faker->email,
      'password'  =>    bcrypt('12345'),
      'imagen'    =>    'User.png',
      'ruta'      =>    public_path() . '/Imagenes/Users/User.png',

  ];
  return $array;
});
