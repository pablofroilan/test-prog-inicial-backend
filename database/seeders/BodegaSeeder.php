<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BodegaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('bodegas')->insert([
            ['bodega_nombre' => "Santiago"],
            ['bodega_nombre' => "Talca"],
            ['bodega_nombre' => "Chillán"],
            ['bodega_nombre' => "Concepción"]
        ]);
    }
}
