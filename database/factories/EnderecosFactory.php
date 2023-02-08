<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Clientes;

class EnderecosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $clientes = Clientes::all()->pluck('id')->toArray();

        return [
            'cep' => $this->faker->numberBetween(10000000, 99999999),
            'endereco' => $this->faker->address,
            'numero' => $this->faker->unique()->numberBetween(1, 2000),
            'complemento' => $this->faker->unique()->numberBetween(101, 2001),
            'bairro' => $this->faker->text(80),
            'cidade' => $this->faker->city,
            'estado' => $this->faker->text(20),
            'cliente_id' => $this->faker->randomElement($clientes)
        ];
    }
}
