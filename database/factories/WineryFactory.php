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
            'name' => $this->faker->word(),
            'code' => $this->faker->lexify(),
            'color' => $this->faker->word(),
            'business' => $this->faker->word(),
            'description' => $this->faker->word(),
            'status' => $this->faker->randomElement([true, false]),
        ];
    }
}
