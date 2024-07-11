<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DispositivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('dispositivos')->insert([
            [
                'dispositivo_nombre' => "Notebook",
                'modelo_id' => 1,
                'bodega_id' => 1
            ],
            [
                'dispositivo_nombre' => "Computador Todo en Uno",
                'modelo_id' => 2,
                'bodega_id' => 2
            ],
            [
                'dispositivo_nombre' => "Notebook",
                'modelo_id' => 3,
                'bodega_id' => 3
            ],
            [
                'dispositivo_nombre' => "Notebook",
                'modelo_id' => 4,
                'bodega_id' => 4
            ],
            [
                'dispositivo_nombre' => "Notebook",
                'modelo_id' => 5,
                'bodega_id' => 1
            ],
            [
                'dispositivo_nombre' => "Notebook",
                'modelo_id' => 6,
                'bodega_id' => 2
            ],
            [
                'dispositivo_nombre' => "Tablet",
                'modelo_id' => 7,
                'bodega_id' => 3
            ],
            [
                'dispositivo_nombre' => "Notebook",
                'modelo_id' => 8,
                'bodega_id' => 4
            ],
            [
                'dispositivo_nombre' => "Televisor 50 pulg",
                'modelo_id' => 9,
                'bodega_id' => 1
            ],
            [
                'dispositivo_nombre' => "Smartphone",
                'modelo_id' => 10,
                'bodega_id' => 2
            ],
            [
                'dispositivo_nombre' => "Impresora",
                'modelo_id' => 11,
                'bodega_id' => 3
            ],
            [
                'dispositivo_nombre' => "Impresora",
                'modelo_id' => 12,
                'bodega_id' => 4
            ],
            [
                'dispositivo_nombre' => "Smartphone",
                'modelo_id' => 13,
                'bodega_id' => 1
            ],
            [
                'dispositivo_nombre' => "Consola de VideoJuegos",
                'modelo_id' => 14,
                'bodega_id' => 1
            ],
        ]);
    }
}
