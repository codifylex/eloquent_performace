<?php

namespace Database\Seeders;

use App\Models\Advisor;
use App\Models\Author;
use App\Models\Post;
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

        Advisor::factory()
            ->count(1000)
            ->has(User::factory()->count(15))
            ->create();

        Author::factory()
            ->count(50)
            ->has(Post::factory()->count(15))
            ->create();
    }
}
