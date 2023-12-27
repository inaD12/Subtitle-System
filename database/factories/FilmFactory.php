<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'year' => $this->faker->year,
            'genre' => $this->faker->word,
            'image' => $this->faker->image(storage_path('../public/storage/films'), 300, 300, null, false),
        ];
    }
}
