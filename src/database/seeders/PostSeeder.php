<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('posts')->insert([
        //     'title' => '命名の心得',
        //     'body' => '命名はデータを基準に考える',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        Post::factory()->count(10)->create();
    }
}
