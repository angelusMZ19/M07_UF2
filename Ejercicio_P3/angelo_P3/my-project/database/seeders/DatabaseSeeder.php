<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Profesores;
use App\Models\Alumnos;
use App\Models\Centros;
//clase principal del seeder
class DatabaseSeeder extends Seeder
{
    public function run(): void {
        // Utiliza la factory method para crear 10 registros de Profesores, alumnos y centros en la base de datos.
        Profesores::factory(10)->create();
        Alumnos::factory(10)->create();
        Centros::factory(10)->create();      
    }
}
