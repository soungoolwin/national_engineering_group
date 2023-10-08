<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'description' => fake()->text(),
            'img_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-sXU3vhnNz0nIbB6Rzdoldl1y_S3AxfqcVrSag36OLn-x_-FpSBcGUBcPlxhOQksIHAY&usqp=CAU'
        ];
    }
}
