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
        Schema::create('favCourses', function (Blueprint $table) {
            $table->bigIncrements('favCoursesID'); //  primary key and auto-increment
            $table->foreignId('userID')->constrained('users', 'userID');
            $table->foreignId('courseID')->constrained('courses', 'courseID');
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
