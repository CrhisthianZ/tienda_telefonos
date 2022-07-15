<?php

namespace Database\Factories;

use App\Models\local;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = local::class;

    public function definition()
    {
        return [
            'Ciudad'=>$this->faker->city,
            'Direccion'=>$this->faker->address,
            'NumeroDeLocal'=>$this->faker->numberBetween(1,20)
        ];
    }
}
