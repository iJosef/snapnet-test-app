<?php

namespace Database\Factories;

use App\Models\Ward;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Citizen>
 */
class CitizenFactory extends Factory
{
    protected $model = \App\Models\Citizen::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'full_name' => fake()->name(),
            'gender' => fake()->randomElement(['male', 'female']),
            'address' => fake()->address,
            'phone' => fake()->phoneNumber,
            'ward_id' => Ward::inRandomOrder()->first()->id
        ];
    }
}
