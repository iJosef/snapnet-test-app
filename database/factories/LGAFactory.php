<?php

namespace Database\Factories;

use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LGA>
 */
class LGAFactory extends Factory
{
    protected $model = \App\Models\LGA::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ranLGAName = ucwords($this->faker->word);

        return [
            'name' => $ranLGAName,
            'state_id' => State::inRandomOrder()->first()->id
        ];
    }
}
