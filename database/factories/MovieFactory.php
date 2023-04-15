<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->realText(10),
            'year' => $this->faker->year(),
            'cover' => $this->faker->url(),
            'genre' => $this->faker->randomElement(['Akciófilm', 'Dráma', 'Kalandfilm', 'Komédia', 'Dráma', 'Fantasy', 'Történelmi', 'Musical', 'Romantikus', 'Sci-Fi', 'Western', 'Családi']),
            'age' => $this->faker->month()
        ];
    }
}
