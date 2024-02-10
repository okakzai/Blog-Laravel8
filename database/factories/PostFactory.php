<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5),
            'featured_home' => mt_rand(0, 1),
            'title' => $this->faker->sentence(mt_rand(1, 2)),
            'slug' => $this->faker->unique()->slug(mt_rand(1, 2)),
            'excerpt' => $this->faker->paragraph(1),
            'body' => $this->faker->paragraph(mt_rand(5, 10))
        ];
    }
}
