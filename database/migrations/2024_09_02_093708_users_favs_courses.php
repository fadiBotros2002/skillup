<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users_favs_courses', function (Blueprint $table) {
            $table->bigIncrements('userFavCourseID'); // primary key and auto-increment
            $table->foreignId('userID')->constrained('users', 'userID');
            $table->foreignId('courseID')->constrained('courses', 'courseID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_favs_courses');

    }
};
