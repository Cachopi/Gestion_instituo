<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "nombre" => fake()->name(),
            "dir" => fake()->address(),
            "email" => fake()->email(),
            "dni" => $this->dni()
        ];
    }

    private function dni()
    {
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        $num_dni = fake()->randomNumber(8, true);
        $num_dni = $num_dni < 0 ? -($num_dni) : $num_dni;
        info("número generao $num_dni");
        $letra = $letras[$num_dni % 23];
        $dni = "$num_dni-$letra";
        return $dni;
    }
}