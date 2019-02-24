<?php

use Faker\Generator as Faker;

$factory->define(App\Proveedores::class, function (Faker $faker) {

    return [
        'proveedor' => $faker->name,
        'cod_motivo' => str_random(5),
        'motivo' => str_random(5),
        'valor_facial' => 2000,
        'tiraje' =>400000,
        'orden_compra' => 1023,
        'status' => $faker->name,
    ];
});
