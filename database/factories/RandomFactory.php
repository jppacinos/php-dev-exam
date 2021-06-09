<?php

namespace Database\Factories;

use App\Models\Random;
use Illuminate\Database\Eloquent\Factories\Factory;

class RandomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Random::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'values' => $this->faker->safeColorName()
        ];
    }
}
