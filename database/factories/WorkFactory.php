<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = implode(' ', $this->faker->words(rand(3, 6)))  ; 

        return [
            'title' => strtoupper($title) ,
            'slug' => Str::slug($title), 
            'problematic' => $this->faker->sentence(rand(20, 40)), 
            'link' => Str::slug($title), 
            'description' => implode(' ', $this->faker->sentences(rand(3, 5)))   
        ];
    }
}
