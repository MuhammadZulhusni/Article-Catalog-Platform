<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(), // Generates a fake sentence for the title
            'author' => fake()->name(), // Generates a fake name for the author
            'slug' => Str::slug(fake()->sentence()), // Generates a slug from a fake sentence
            'body' => fake()->text() // Generates fake text for the body
        ];
    }
}
