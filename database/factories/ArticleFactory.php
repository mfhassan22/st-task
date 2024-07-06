<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $articleText = $this->faker->realTextBetween(500, 2000);
        return [
            'name' => $this->faker->sentence,
            'article_text'=>$articleText,
            'wordcount' => str_word_count($articleText),
            'status' => $this->faker->randomElement(['published', 'draft']),
        ];
    }
}
