<?php

use Faker\Generator as Faker;


    $factory->define(App\Orden::class, function (Faker $faker) {
    return [
        'proveedor' => $faker->name,
        'orden_compra' => 236,
        'cant_lotes_creados' => 5,
        'cant_lotes_existentes' =>3, 
        
    ];
});
