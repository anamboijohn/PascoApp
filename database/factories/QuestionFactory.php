<?php

namespace Database\Factories;

use App\Models\Pasco;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Core\Number;
use Spatie\LaravelIgnition\Support\Composer\FakeComposer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'question'=> $this->faker->sentence
        ];
    }
}
