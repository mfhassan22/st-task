<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Book;
use App\Models\User;
use App\Models\Writer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'test@example.com',
            'password' => Hash::make('password')
        ]);

        Writer::factory()->create([
            'name'=>'Fyodor Dostoyevsky'
        ]);

        Writer::factory()->create([
            'name'=>'Arthur Schopenhauer'
        ]);
        
        Book::factory()->count(10)->create();
        Article::factory()->count(50)->create();
    }
}
