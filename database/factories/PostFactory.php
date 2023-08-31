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
        $content = '';
        for ($i = 0; $i < rand(5, 8); $i++) {
            $content .= $this->faker->text(700) . "\n";
        }

        return [
            'title' => $this->faker->words(rand(3, 6), true),
            'slug' => $this->faker->slug,
            'author' => $this->faker->name,
            'content' => $content,
            'category' => $this->faker->word(),
            'reading_time' => rand(1, 10),
        ];
    }
}
