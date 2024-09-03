<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'title' => 'Introduction to Programming',
                'description' => 'Learn the basics of programming with this introductory course.',
                'video_url' => 'http://example.com/video1',
                'categoryID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Advanced Web Development',
                'description' => 'Master the art of web development with advanced techniques.',
                'video_url' => 'http://example.com/video2',
                'categoryID' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
