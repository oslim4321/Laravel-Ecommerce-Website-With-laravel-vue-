<?php

namespace Database\Factories;

// use App\Models\Product;


use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->sentence(),
            'product_description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'category' => $this->faker->word(),
        ];
    }
}
