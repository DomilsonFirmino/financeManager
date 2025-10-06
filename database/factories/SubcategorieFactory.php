<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subcategorie>
 */
class SubcategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $Categories = ['internet', 'Renda','Eletricidade','Água','Compras','Lazer','Taxi','saldo', 'poupança'];
        return [
            'name' => $this->faker->randomElement($Categories),
            'description' => $this->faker->sentence(),
            'weight' => $this->faker->randomNumber(),
            'budget' => $this->faker->randomFloat(2, 0, 10000),
            'type' => $this->faker->randomElement(['fixed', 'variable']),
        ];
    }
}
