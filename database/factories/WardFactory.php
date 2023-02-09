<?php

namespace Database\Factories;

use App\Models\LGA;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ward>
 */
class WardFactory extends Factory
{
    protected $model = \App\Models\Ward::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ranWardName = ucwords($this->faker->word);

        return [
            'name' => $ranWardName,
            'lga_id' => LGA::inRandomOrder()->first()->id
        ];
    }
}
