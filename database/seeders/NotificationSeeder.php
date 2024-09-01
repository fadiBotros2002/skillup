<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notifications')->insert([
            [
                'userID' => 1,
                'content' => 'Your course has been updated.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'userID' => 2,
                'content' => 'New quiz available in your course.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
