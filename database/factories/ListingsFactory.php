<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ListingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'laravel,api,listing,orm',
            'company' => $this->faker->company(),
            'email' => $this->faker->email(),
            'location' => $this->faker->city(),
            'description' => $this->faker->paragraph(8),

        ];
    }
}
