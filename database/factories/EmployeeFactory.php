<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'job_title' => $this->faker->jobTitle,
            'mobile_no' => $this->faker->phoneNumber(),
            'joining_date' => $this->faker->date,
            'salary' => $this->faker->randomFloat(3, 100000, 2),
            'address' => $this->faker->address,
            'email' => $this->faker->safeEmail
        ];
    }
}
