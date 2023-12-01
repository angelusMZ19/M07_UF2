<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Alumnat;
use App\Models\Professorat;
use App\Models\Centres;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Centres::factory()
                -> count(20)
                ->create();

        Alumnat::factory()
                -> count(20)
                ->create();

        Professorat::factory()
                -> count(20)
                ->create();
    }
}
