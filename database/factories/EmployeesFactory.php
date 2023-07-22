<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'supervisor_id' => fake()->numberBetween($min = 1, $max = 10),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'last_name' => fake()->lastName(),
            'middle_initial' => fake()->randomLetter(),
            'job_title' => fake()->jobTitle(),
        ];
    }
}
