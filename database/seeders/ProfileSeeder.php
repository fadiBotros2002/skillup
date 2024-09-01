<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('profiles')->upsert([
            [
                'userID' => 1,
                'bio' => 'This is a sample bio.',
                'profile_picture' => 'profile1.jpg',
                'birthdate' => '1990-01-01',
                'phone' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'userID' => 2,
                'bio' => 'Another sample bio.',
                'profile_picture' => 'profile2.jpg',
                'birthdate' => '1992-02-02',
                'phone' => '0987654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ], ['userID'], ['bio', 'profile_picture', 'birthdate', 'phone', 'updated_at']);



    }
}
