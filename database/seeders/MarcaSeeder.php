<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('marcas')->insert([
            ['marca_nombre' => "Apple"],
            ['marca_nombre' => "Acer"],
            ['marca_nombre' => "HP"],
            ['marca_nombre' => "Lenovo"],
            ['marca_nombre' => "Samsung"],
            ['marca_nombre' => "Epson"],
            ['marca_nombre' => "Sony"]
            
        ]);
    }
}
