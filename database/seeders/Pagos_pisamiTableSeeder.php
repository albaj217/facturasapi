<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pagos_pisami;

class Pagos_pisamiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //vaciar la tabla 
        Pagos_pisami::truncate();
        $faker = \faker\Factory::create();

        //crear articulos ficticios en la tabla
        for($i = 0; $i<5; $i++){
            Pagos_pisami::create([
                'codigo_asobancaria'=>$faker->paragraph,
                'forma_pago'=>$faker->paragraph,
                'codigo_barra'=>$faker->paragraph,
                'numero_cuenta'=>$faker->paragraph,
                'numero_recibo'=>$faker->paragraph,
                'valor_pagado'=>$faker->paragraph,
                'fecha_pago'=>$faker->paragraph,
                'codigo_aceptacion'=>$faker->paragraph,
                'codigo_transaccion'=>$faker->paragraph
            ]);
        }
    }
}
