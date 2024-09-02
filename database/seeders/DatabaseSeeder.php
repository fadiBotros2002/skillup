<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            ActiveUserSeeder::class,
            UserSeeder::class,
            ProfileSeeder::class,
            CategorySeeder::class,
            CourseSeeder::class,
            QuizSeeder::class,
            CertificateSeeder::class,
            CommentSeeder::class,
            UserFavCourseSeeder::class,
            NotificationSeeder::class,
            QuizResultSeeder::class,
            UserCourseSeeder::class,
        ]);



        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
