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
        $randNum = rand(1,1000);

        return [

            'id' => fake()->unique()->numberBetween(1, 10),
            'post_title' => fake()->sentence(6),
            'post_body' => fake()->paragraph(10),
            'thumbnail' => "https://picsum.photos/id/$randNum/200/200",
            'user_id' => fake()->numberBetween(1, 1000),
            'post_status_id' => fake()->numberBetween(1, 3),
        ];
    }
}
