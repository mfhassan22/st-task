<?php

namespace Database\Factories;

use App\Models\Writer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $writers=Writer::pluck('id')->toArray();
        return [
            'writer_id'=>$this->faker->randomElement($writers),
            'title'=>$this->faker->sentence(3)
        ];
    }
}
