<?php

namespace Database\Seeders;

use App\Models\QuestionAnswer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class QuestionAnswerSeeder extends Seeder
{
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        QuestionAnswer::truncate();
        Schema::enableForeignKeyConstraints();
        QuestionAnswer::factory()->times(15)->create();
    }
}
