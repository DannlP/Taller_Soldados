<?php

namespace Database\Factories;

use App\Models\Soldado;
use Illuminate\Database\Eloquent\Factories\Factory;

class SoldadoFactory extends Factory
{
    protected $model = Soldado::class;

    public function definition()
    {
        return [
            'Cod_s' => $this->faker->unique()->randomNumber(),
            'Nom_s' => $this->faker->firstName,
            'Apell_s' => $this->faker->lastName,
            'Grado_s' => $this->faker->randomElement(['Sergeant', 'Lieutenant', 'Captain']),
            'Cod_ce1' => $this->faker->numberBetween(1, 5),
            'Num_com1' => $this->faker->numberBetween(1, 10),
            'Cod_c2' => $this->faker->numberBetween(1, 3),
        ];
    }
}
