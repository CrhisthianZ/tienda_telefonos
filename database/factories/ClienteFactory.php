<?php

namespace Database\Factories;

use App\Models\cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = cliente::class;

    public function definition()
    {
        return [
            'Nombre_Cliente'=>$this->faker->name,
            'Apellido_Cliente'=>$this->faker->lastName,
            'NumeroTelefono'=>$this->faker->phoneNumber,
            'Direccion'=>$this->faker->address,
            'FechaDeCompra'=>$this->faker->date
        ];
    }
}
