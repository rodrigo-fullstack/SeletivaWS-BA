<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::insert([
            [
                'name' => 'Rogério Lazaro Junior',
                'email' => 'rogerioljr@gmail.com',
                'user_type' => 'avaliador',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'José das Fontes Luz',
                'email' => 'jose@mba.com.br',
                'user_type' => 'representante',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
