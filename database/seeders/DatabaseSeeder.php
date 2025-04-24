<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Subcategory;
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

        Category::insert(
            [
                [
                    'nome_categoria' => 'Teste Categoria 1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nome_categoria' => 'Teste Categoria 2',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]
            );
        Subcategory::insert(
            [
                [
                    'nome_subcategoria' => 'Teste SubCategoria 1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nome_subcategoria' => 'Teste SubCategoria 2',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]
            );
    }
}
