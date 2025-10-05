<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MonthlyBudget>
 */
class MonthlyBudgetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'month' => $this->faker->numberBetween(1, 12),
            'year' => $this->faker->year(),
            'notes' => $this->faker->sentence(),
            'budget' => $this->faker->randomFloat(2, 0, 10000),
            'user_id' => User::factory(),
        ];
    }
}
