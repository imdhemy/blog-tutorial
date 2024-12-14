<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    protected $model= Post::class;

    public function definition(): array
    {
        return [
            "title" => $this->faker->sentence(),
            "body" => $this->faker->paragraph(),
            'user_id' => User::factory(),
        ];
    }
}