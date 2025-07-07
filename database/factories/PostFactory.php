<?php

namespace Database\Factories;

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
            'title' => fake()->sentence(),
            'content' => fake()->paragraphs(3, true),
            'slug' => fake()->slug(),
            'thumbnail' => fake()->imageUrl(640, 480, 'nature', true),
            'status' => fake()->boolean(),
            'user_id' => \App\Models\User::factory(),
            'published_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
