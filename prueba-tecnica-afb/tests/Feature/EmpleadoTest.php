<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Empleado;

class EmpleadoTest extends TestCase
{
    /**
     * Test para crear, leer, actualizar y eliminar un empleado.
     *
     * @return void
     */
    public function testCrudEmpleado()
    {
        // Crear un nuevo empleado
        $empleado = Empleado::create([
            'nombre' => 'Pepito Perez',
            'correo' => 'pepito@example.com',
            'cedula' => '123456789',
            'telefono' => '3153383189',
            'departamento_id' => 1, // Suponiendo que el departamento con ID 1 existe
        ]);

        // Verificar que el empleado se haya creado correctamente
        $this->assertInstanceOf(Empleado::class, $empleado);

        // Leer el empleado recién creado desde la base de datos
        $empleadoCreado = Empleado::find($empleado->id);

        // Verificar que se pueda leer el empleado desde la base de datos
        $this->assertEquals('Pepito Perez', $empleadoCreado->nombre);
        $this->assertEquals('pepito@example.com', $empleadoCreado->correo);
        $this->assertEquals('123456789', $empleadoCreado->cedula);
        $this->assertEquals('3153383189', $empleadoCreado->telefono);
        $this->assertEquals(1, $empleadoCreado->departamento_id);

        // Actualizar la información del empleado
        $empleadoCreado->nombre = 'Pedro Gomez';
        $empleadoCreado->save();

        // Verificar que el empleado se haya actualizado correctamente
        $this->assertEquals('Pedro Gomez', $empleadoCreado->fresh()->nombre);

        // Eliminar el empleado
        $empleadoCreado->delete();

        // Verificar que el empleado se haya eliminado correctamente
        $this->assertNull(Empleado::find($empleado->id));
    }
}
