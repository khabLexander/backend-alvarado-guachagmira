<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->work(),
            'description' => $this->faker->work(),
            'price'=> $this->faker->work(),
            'business'=> $this->faker->work(),
            'actived'=> $this->faker->randomElement([true, false]),
            'date'=> $this->faker->date(),
        ];
    }
}
