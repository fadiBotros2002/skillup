<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quizes')->insert([
            [
                'title' => 'Basic Programming Quiz',
                'courseID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Web Development Quiz',
                'courseID' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
