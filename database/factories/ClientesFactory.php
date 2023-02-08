<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'foto' => $this->faker->imageUrl($width = 200, $height = 200),
            'nome' => $this->faker->name,
            'nome_mae' => $this->faker->name, 
            'data_nascimento' => $this->faker->dateTime()->format('Y-m-d'),
            'cpf' => $this->faker->unique()->numberBetween(10000000000000, 99999999999999), 
            'cns' => $this->faker->unique()->numberBetween(100000000000000, 999999999999999)
       ];
    }
}
