<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Books>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'code' => $this->faker->randomNumber(5),
            'title' => $this->faker->words(3,true),
            'description' => $this->faker->paragraph(),
            'author' => $this->faker->name(),
            'publisher' => $this->faker->word(),
            'img' => $this->faker->imageUrl(640, 480, 'animals', true,'cats')
        ];
    }
}
