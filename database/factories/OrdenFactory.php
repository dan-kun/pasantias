<?php

use Faker\Generator as Faker;


    $factory->define(App\Orden::class, function (Faker $faker) {
    return [
        'proveedor' => $faker->name,
        'orden_compra' => 1023,
        'cant_lotes_creados' => 50,
        'cant_lotes_existentes' =>9, 

    ];
});
