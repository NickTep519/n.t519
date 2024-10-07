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
        $title = implode(' ',  $this->faker->words(rand(3, 6))) ; 

        return [
            'title' => strtoupper($title) ,
            'slug' => Str::slug($title), 
            'problematic' => $this->faker->sentence(50), 
            'content' => $this->faker->sentence(350), 
        ];
    }
}
