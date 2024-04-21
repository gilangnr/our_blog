<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

use function PHPSTORM_META\map;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Gilang',
            'username' => 'gilang',
            'email' => 'gilang@gmail.com',
            'password' => bcrypt('pasword')
        ]);

        // User::create([
        //     'name' => 'Andre',
        //     'email' => 'andre@gmail.com',
        //     'password' => bcrypt('pasword')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web_programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web_desain',
        ]);

        Post::factory(20)->create();
    }
}
