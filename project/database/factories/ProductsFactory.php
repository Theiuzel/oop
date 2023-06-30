<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $type = ['pc','pack','kg','liter'];
        // return [
        //     'name' => $this->faker->name,
        //     'price' => $this->faker->randomFloat(2, 10, 1000),
        //     'description' => $this->faker->paragraph,
        // ];
    }
}
