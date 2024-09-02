<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users_courses')->insert([
            [

                'userID' => 1,
                'courseID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'userID' => 2,
                'courseID' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
