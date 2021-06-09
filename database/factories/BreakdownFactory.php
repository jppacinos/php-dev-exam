<?php

namespace Database\Factories;

use App\Models\Breakdown;
use App\Models\Random;
use Illuminate\Database\Eloquent\Factories\Factory;

class BreakdownFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Breakdown::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // random 5-character ( alphanumeric ) string
            'values' => $this->faker->regexify('[A-Za-z0-9]{5}'),
            'random_id' => \App\Models\Random::factory()
        ];
    }

    /**
     * we don't want any typo in random_id
     *
     * @param \App\Models\Random|int $random
     * @return Factory
     */
    public function random($random)
    {
        return $this->state([
            'random_id' => $random instanceof Random ? $random->id : $random
        ]);
    }
}
