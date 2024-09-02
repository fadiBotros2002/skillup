<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quiz_results')->insert([
            [
                'userID' => 1,
                'quizID' => 1,
                'score' => 85,
                'passed' => true,
                'completed_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'userID' => 2,
                'quizID' => 1,
                'score' => 45,
                'passed' => false,
                'completed_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
