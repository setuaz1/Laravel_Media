<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $name = 'Test User';

        User::factory()->create([
            'name' => $name,
            'username' => Str::slug($name),
            'email' => 'test@example.com'
        ]);
        $categories = [
            'Technology',
            'Health',
            'Science',
            'Sports',
            'Politics',
            'Entertaiment',
        ];
        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
        // Post::factory(100)->create();
    }
}
