<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creamos el departamento para los empleados sin asignar
        Departamento::factory()->create(['nombre' => 'Sin asignar']); // Departamento sin asignar

        // Creamos los otros departamentos
        Departamento::factory()->count(4)->create();
    }
}
