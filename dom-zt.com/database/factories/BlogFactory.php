<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'picture' => 'blog.jpeg',
            'title' => $this->faker->text(30),
            'text' => $this->faker->paragraph,
            'slug' => $this->faker->slug,
            'category_id' => $this->faker->numberBetween(1,5),
            'author_id' => 1,
        ];
    }
}
