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
        $available_genres = ['Akciófilm', 'Dráma', 'Kalandfilm', 'Komédia', 'Dráma', 'Fantasy', 'Történelmi', 'Musical', 'Romantikus', 'Sci-Fi', 'Western', 'Családi'];
        $available_pcrs = [6, 16, 12, 18];
        $available_titles = ['A szörny', 'Szupercella', 'Suzume', 'Renfield', 'Amitől félünk', 'A pápa ördögűzője', 'Gyönyörű sorscsapás', 'Hat hét', '13 ördögűzés', 'Éjszakai átutazók', 'Műanyag égbolt'];
        return [
            'title' => $this->faker->randomElement($available_titles),
            'year' => $this->faker->year(),
            'cast' => $this->faker->randomElement(['Clancy Brown', 'Harbringer', 'Ian McShane', 'Winston', 'Marko Zaror', 'Chidi', 'Bill Skarsgard', 'Marquis']),
            'director' => $this->faker->lastName(),
            'length' => $this->faker->numberBetween(45,300),
            'age' => $this->faker->randomElement($available_pcrs),
            'genre' => $this->faker->randomElement($available_genres) . ', ' . $this->faker->randomElement($available_genres) . ', ' . $this->faker->randomElement($available_genres),
            'cover' => $this->faker->url(),
            'cover_big' => $this->faker->url(),
            'trailer' => $this->faker->url(),
            'description' => $this->faker->realText(250)
        ];
    }
}