<?php

namespace Database\Factories;

use App\Models\QuestionAnswer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class QuestionAnswerFactory extends Factory
{
    protected $model = QuestionAnswer::class;

    public function definition(): array
    {
        return [
            'question' => $this->faker->text(100),
            'answer' => $this->faker->text(250),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
