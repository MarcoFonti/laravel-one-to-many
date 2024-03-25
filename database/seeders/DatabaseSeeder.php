<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        /* \App\Models\User::factory()->create([
            'name' => 'Marco Fonti',
            'email' => 'theemporiumg@gmail.com',
        ]); */

        /* TYPESEEDER */
        $this->call(TypeSeeder::class);
        
        /* FAKE PROJECT */
        \App\Models\Project::factory(10)->create();

    }
}