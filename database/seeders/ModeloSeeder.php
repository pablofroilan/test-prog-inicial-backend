<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('modelos')->insert([
            [
                'modelo_nombre' => "MacBook Pro 13 2020",
                'marca_id' => 1
            ],
            [
                'modelo_nombre' => "iMac 21,5 2019",
                'marca_id' => 1
            ],
            [
                'modelo_nombre' => "Aspire E5",
                'marca_id' => 2
            ],
            [
                'modelo_nombre' => "Nitro 5",
                'marca_id' => 2
            ],
            [
                'modelo_nombre' => "Pavilion 13",
                'marca_id' => 3
            ],
            [
                'modelo_nombre' => "x360",
                'marca_id' => 3
            ],
            [
                'modelo_nombre' => "Tab M10",
                'marca_id' => 4
            ],
            [
                'modelo_nombre' => "IdeaPad 330s",
                'marca_id' => 4
            ],
            [
                'modelo_nombre' => "AU7090",
                'marca_id' => 5
            ],
            [
                'modelo_nombre' => "Galaxy A70",
                'marca_id' => 5
            ],
            [
                'modelo_nombre' => "L220",
                'marca_id' => 6
            ],
            [
                'modelo_nombre' => "L380",
                'marca_id' => 6
            ],
            [
                'modelo_nombre' => "Xperia XA1",
                'marca_id' => 7
            ],
            [
                'modelo_nombre' => "PlayStation 5",
                'marca_id' => 7
            ]
        ]);
    }
}
