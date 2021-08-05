<?php

namespace Database\Factories;

use App\Models\Winery;
use Illuminate\Database\Eloquent\Factories\Factory;

class WineryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Winery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'code' => $this->faker->lexify(),
            'color' => $this->faker->word(),
            'description' => $this->faker->sentence(3),
            'status' => $this->faker->randomElement([true, false]),
        ];
    }
}
