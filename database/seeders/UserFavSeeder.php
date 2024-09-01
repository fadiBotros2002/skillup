<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserFavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users_favs_cat')->insert([
            [
                'userID' => 1,
                'CategoryID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'userID' => 2,
                'CategoryID' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

    }
}
