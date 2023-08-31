<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'comment' => $this->faker->paragraph(),
        ];
    }

    /**
     * Indicate that the comment belongs to a post.
     *
     * @param  int  $id
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function withPost($id)
    {
        return $this->state([
            'post_id' => $id
        ]);
    }
}
