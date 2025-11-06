<?php

namespace Database\Seeders;

use App\Models\Produto;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Mockery\Matcher\HasKey;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('123456')
        ]);

         User::factory()->create([
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
            'password' => Hash::make('123456')
        ]);

         User::factory()->create([
            'name' => 'Test User 3',
            'email' => 'test3@example.com',
            'password' => Hash::make('123456')
        ]);

         Produto::create([
            'nome' => 'vestido',
            'quantidade' => '200',
            'preco' => '22.00'
        ]);

        Produto::create([
            'nome' => 'blusa',
            'quantidade' => '200',
            'preco' => '22.00'
        ]);

        Produto::create([
            'nome' => 'saia',
            'quantidade' => '200',
            'preco' => '22.00'
        ]);
    }
}
