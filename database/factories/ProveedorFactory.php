<?php

use Faker\Generator as Faker;

$factory->define(App\Proveedores::class, function (Faker $faker) {

    return [
        'proveedor' => $faker->randomElement(['MOVILNET','NEA','EQUIS', 'FRESS', 'BOLT', 'MAQUINE', 'DABLIU', 'EIGTH', 'THREE', 'BLUE', 'LIMBER', 'NERON', 'ALEJO', 'DAN', 'ORI', 'KOKO']),
        'cod_motivo' => str_random(5),
        'motivo' => $faker->randomElement(['PIN VIRTUAL','UNICA','CANTV']),
        'valor_facial' => $faker->randomElement(['1000','1500','2000']),
        'tiraje' =>500000,
        'orden_compra' => mt_rand(1000000,18700000),
<<<<<<< HEAD
        'status' => $faker->randomElement(['LIBERAR','POR CARGAR','POR ENVIAR','SUSPENDIDO', 'CARGADO' ]),
=======
        'status' => $faker->randomElement(['LIBERADO GSI','POR CARGAR','POR ENVIAR','SUSPENDIDO', 'CARGADO' ]),
>>>>>>> 3179c2a55d9cd52ff36df7d43a794fc1941e4eb4
    ];
});
