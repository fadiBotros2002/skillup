<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comments')->insert([
            [
                'content' => 'Great course!',
                'userID' => 1,
                'courseID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'Very informative.',
                'userID' => 2,
                'courseID' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'perfect.',
                'userID' => 2,
                'courseID' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
