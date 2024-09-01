<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActiveUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('active_users')->insert([
            ['activeUserID' => 1, 'isActive' => 'active'],
            ['activeUserID' => 2, 'isActive' => 'inactive'],
        ]);
    }
}
