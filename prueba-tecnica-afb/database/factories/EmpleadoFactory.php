<?php

namespace Database\Factories;
use App\Models\Departamento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'correo' => $this->faker->unique()->safeEmail,
            'cedula' => $this->faker->unique()->randomNumber(8),
            'telefono' => $this->faker->phoneNumber,
            'departamento_id' => Departamento::factory(),
        ];
    }
}
