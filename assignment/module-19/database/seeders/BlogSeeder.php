<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create();

        // Create sample blogs with random data
        for ($i = 0; $i < 10; $i++) {
            $blog = Blog::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
                'image' => $faker->imageUrl(),
            ]);

            // Create comments for each blog
            for ($j = 0; $j < 3; $j++) {
                Comment::create([
                    'blog_id' => $blog->id,
                    'comment' => $faker->paragraph,
                ]);
            }
        }
    }
}
