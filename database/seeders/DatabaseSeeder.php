<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Group::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Modality::factory(10)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Course::factory(10)->create();
        \App\Models\WhisList::factory(10)->create();
        \App\Models\Unit::factory(10)->create();
        \App\Models\Topic::factory(10)->create();
    }
}
