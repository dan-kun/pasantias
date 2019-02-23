<?php

use Faker\Generator as Faker;

$factory->define(App\Proveedores::class, function (Faker $faker) {
    
    return [
        'proveedor' => $faker->name,
        'cod_motivo' => str_random(5),
        'motivo' => str_random(5),
        'valor_facial' => 1000,
        'tiraje' =>500000,
        'orden_compra' => 236,
        'status' => $faker->name,
    ];
});
