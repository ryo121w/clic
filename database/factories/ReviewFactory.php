<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Review;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    public function definition()
    {

     return [
    'title' => fake()->word,
    'body' => fake()->text($maxNbChars = 20),
    'user_id' => 1,
    ];

    }
}
