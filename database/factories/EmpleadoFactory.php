<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            /*'nombres' => $this->faker->name(),
            'apellidos'=> $this->faker->text(),
            'identidad'=> $this->faker->text(),
            'direccion'=> $this->faker->text(),
            'telefono' => $this->faker->text(),
            'ciudad_nacimiento'=> $this->faker->text()*/
        ];
    }
}
