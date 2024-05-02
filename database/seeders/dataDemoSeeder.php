<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Seeder;

class dataDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(5)->has(Profile::factory())->has(Post::factory()->count(3))->create();

        // Post::factory()->count(10)->has(Comment::factory()->count(3))->create();
        // Video::factory()->count(5)->has(Comment::factory()->count(2))->create();

        Post::factory()->count(10)->create();
        Video::factory()->count(5)->create();

        Comment::factory()->count(10)->create();
    }
}
