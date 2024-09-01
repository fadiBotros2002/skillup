<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('certificates')->insert([
            [
                'userID' => 1,
                'courseID' => 1,
                'quizID' => 1,
                'issued_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'userID' => 2,
                'courseID' => 2,
                'quizID' => 2,
                'issued_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
