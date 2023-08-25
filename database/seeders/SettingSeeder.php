<?php

namespace Database\Seeders;

use App\Models\QuestionAnswer;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        if (app()->isLocal()){
            Schema::disableForeignKeyConstraints();
            Setting::truncate();
            Schema::enableForeignKeyConstraints();
            Setting::create([
                'padding_top' => '0px',
                'padding_bottom' => '0px'
            ]);
        }
    }
}
