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
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('courseID'); // courseID as primary key and auto-increment
            $table->string('title');
            $table->text('description');
            $table->string('video_url');
            $table->foreignId('categoryID')->constrained('categories', 'categoryID'); // الربط بجدول categories
            $table->foreignId('userID')->constrained('users', 'userID'); // الربط بجدول users
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
