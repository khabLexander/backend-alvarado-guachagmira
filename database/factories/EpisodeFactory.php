<?php

namespace Database\Factories;

use App\Models\Episode;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Episode::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'season' => $this->faker->randomDigitNotNull(),
            'air_date' => $this->faker->dateTimeBetween(),
            'episode' => $this->faker->randomNumber(5, false)
        ];
    }
}
