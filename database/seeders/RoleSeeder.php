<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Clear the roles table
        DB::table('roles')->truncate();

        // Enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Insert or update roles
        DB::table('roles')->updateOrInsert(
            ['roleID' => 1],
            ['roleName' => 'Admin']
        );
        DB::table('roles')->updateOrInsert(
            ['roleID' => 2],
            ['roleName' => 'User']
        );

    }
}
