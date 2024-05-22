<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Departamento;

class DepartamentoTest extends TestCase
{
    /**
     * Test para crear, leer, actualizar y eliminar un departamento.
     *
     * @return void
     */
    public function testCrudDepartamento()
    {
        // Crear un nuevo departamento
        $departamento = Departamento::create([
            'nombre' => 'Ventas',
        ]);

        // Verificar que el departamento se haya creado correctamente
        $this->assertInstanceOf(Departamento::class, $departamento);

        // Leer el departamento recién creado desde la base de datos
        $departamentoCreado = Departamento::find($departamento->id);

        // Verificar que se pueda leer el departamento desde la base de datos
        $this->assertEquals('Ventas', $departamentoCreado->nombre);

        // Actualizar el nombre del departamento
        $departamentoCreado->nombre = 'Marketing';
        $departamentoCreado->save();

        // Verificar que el departamento se haya actualizado correctamente
        $this->assertEquals('Marketing', $departamentoCreado->fresh()->nombre);

        // Eliminar el departamento
        $departamentoCreado->delete();

        // Verificar que el departamento se haya eliminado correctamente
        $this->assertNull(Departamento::find($departamento->id));
    }
}
