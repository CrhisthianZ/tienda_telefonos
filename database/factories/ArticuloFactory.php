<?php

namespace Database\Factories;

use App\Models\articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = articulo::class;

    public function definition()
    {
        return [
            'Articulo'=>$this->faker->randomElement($marca = ['iPhone','SAMSUNG','XIAOMI','ALCATEL','Huawei','Nokia','Blackberry']),
            'Precio'=>$this->faker->numberBetween(1000,10000)
        ];
    }
}
