<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Llamar a seeders para poblar la base de datos
        $this->call([
            BodegaSeeder::class,
            MarcaSeeder::class,
            ModeloSeeder::class,
            DispositivoSeeder::class
        ]);
    }
}
